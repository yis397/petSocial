@props(['value'])
<label class="block mb-3" for="{{$value}}">
    <span class="block text-sm font-medium text-slate-700">{{$value}}</span>
    <input {{ $attributes->merge(['class'=>'peer border w-full p-1'])}} />
  </label>
