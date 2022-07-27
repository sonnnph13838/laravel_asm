<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [];
        $currentAction = $this->route()->getActionMethod();
        // để lấy phương thức hiện tại
        switch ($this->method()):
            case 'POST':
                switch ($currentAction) {
                    case 'add':
                        $rules = [
                            'name' => 'required|unique:room',
                            'id_kind_of_room' => 'required',
                            'price' => 'required',
                            'discription' => 'required',
                        ];
                    default:
                        break;
                }
                break;

            default:
                break;
        endswitch;
        return $rules;
    }
    public function messages()
    {
        return [
            'name.required' => 'Bắt Buộc Phải Nhập Tên Phòng',
            'name.unique' => 'Tên Phòng Đã Tồn Tại',
            'id_kind_of_room.required' => 'Bắt Buộc Phải Chọn Loại Phòng',
            'price.required' => 'Bắt Buộc Phải Nhập Giá',
            'discription.required' => 'Bắt Buộc Phải Nhập Mô Tả',
        ];
    }
}
