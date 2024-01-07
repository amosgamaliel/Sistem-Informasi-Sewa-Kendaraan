<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class CreateOrderRequest extends FormRequest
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
        return [
            'kendaraan_id' => 'required|exists:kendaraans,id',
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'tanggal_sewa' => 'required|date',
            'lama_sewa' => 'required|integer|min:1',
            'total_bayar' => 'required|integer',
            'opsi' => 'nullable|integer',
            'catatan' => 'nullable|string',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response([
            "errors" => $validator->getMessageBag()
        ], 400));
    }
}
