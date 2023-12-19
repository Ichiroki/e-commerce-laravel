<label class="form-control w-full">
    <div class="label flex flex-col items-start">
        <span class="label-text mb-3">{{ $label }}</span>
        <input type="{{ $type }}" placeholder="Type here" class="input input-bordered w-full" wire:model="form.{{ $name }}" />
    </div>
</label>