@props(['options', 'key', 'value', 'selected'=> null])



<select {!! $attributes->merge(['class' => 'border-gray-700 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300
 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600
  rounded-md shadow-sm'])!!}>
  
  @foreach ($options as $option)

  {{-- the php is to help show where the issue is on the laravel.log in the storage\laravel.log
  @php

   info($option);
   info($key);
   info($option->$key);
   
  @endphp --}}
  
    <option value="{{$option->$key}}">{{ $option->$value }}</option>
      
  @endforeach

</select>

{{-- above is example for debugging in the php --}}

{{-- @props(['options', 'key', 'value', 'selected' => null])

<select {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300
focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600
rounded-md shadow-sm']) !!}>
    @foreach ($options as $option)
        <option value="{{ $option->$key }}" @if ($option->$key == $selected) selected @endif>
            {{ $option->$value }}
        </option>
    @endforeach
</select> --}}