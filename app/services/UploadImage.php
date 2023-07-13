<?php
namespace App\Services;

use App\Models\Image;
use Illuminate\Support\Str;

class UploadImage
{

    private $image;
    public function upload($image)
    {
        $this->image = $image;

        if ($this->validate_image_exist() == false):
            return [
                'status' => false,
                'message' => 'Image not Exist',
            ];
        endif;

        $image_path = $this->get_full_image_path();

        if ($this->storage_image()):
            return $this->store_on_db($image_path);
        endif;

        return [
            'status' => false,
            'message' => 'Image not stored',
        ];
    }

    public function validate_image_exist()
    {
        if (is_null($this->image)) {
            return false;
        }

        if (gettype($this->image) != 'object') {
            return false;
        }

        return true;
    }

    public function get_full_image_path()
    {
        return $this->image_path() . '/' . $this->generate_image_name();
    }

    public function generate_image_name()
    {
        return Str::random(10) . time() . '.' . $this->image->getClientOriginalExtension();
    }

    public function image_path()
    {
        return 'services/image';
    }

    public function storage_image()
    {
        $upload = $this->image->storeAs($this->image_path(), $this->generate_image_name(), 'public');
        if ($upload) {
            return true;
        }

    }

    public function store_on_db($image)
    {
        $image = Image::create([
            'path' => $image,

        ]);

        return $image;
    }

    public function delete_image($image_id)
    {
        $image = Image::find($image_id);

        if ($image):
            if (file_exists(public_path($image->path))):
                File::delete(public_path($image->path));
            endif;

            $image->delete();
            return [
                'status' => 'true',
                'message' => 'Image is stored successfully',
                'path' => $image,
            ];
        endif;
    }
    public function add_image_info($data, $image_id)
    {
        $image = Image::where([
            'id' => $image_id,
        ])->update($data);
    }

}
