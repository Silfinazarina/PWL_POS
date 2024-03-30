<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'kodeKategori' => 'required',
            'namaKategori' => 'required',
        ];
    }

    public function store(StorePostRequest $request): RedirectResponse{
        // The incoming request is valid ...

        // Retrieve the validated input data ...
        $validated = $request->validated();

        // Retrieve a portion of the validated input data ...
        $validated = $request->safe()->only(['kodeKategori', 'namaKategori']);
        $validated = $request->safe()->except(['kodeKategori', 'namaKategori']);

        // Store the post ...

        return redirect('/kategori');
    }
}
