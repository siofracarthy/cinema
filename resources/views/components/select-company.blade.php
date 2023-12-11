
@props(['companies', 'field' => '','selected' => null])

<select {{ $attributes->merge(['class' => 'form-select']) }}>
    @foreach ($companies as $company)
        <option value="{{ $company->id }}" {{ $selected == $company->id ? 'selected' : '' }}>
            {{ $company->name }}
        </option>
    @endforeach
</select>

@error($field)
<div class="text-red-600 text-sm">{{ $message }}</div>
@enderror
