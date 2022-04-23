<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Int debut</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title"
            wire:model="int_debut">
        @error('int_debut')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="tarif" class="block mt-3 mb-1 font-medium text-sm text-gray-700">Employe Tarif</label>
        <select name="tarif" id="tarif" style="width: 100%;" wire:model="int_par_id"
            class="block rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            required>
            <option value=""> </option>
            @foreach ($emp as $value)
                <option value={{ $value->emp_nss }}>{{ $value->emp_nss }}</option>
            @endforeach
        </select>
        @error('int_par_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    {{-- <div class="form-group">
        <label for="exampleFormControlInput1">Int emp nss</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title"
            wire:model="int_par_id">
        @error('int_par_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div> --}}
    {{-- <div class="form-group">
        <label for="exampleFormControlInput2">Int par id</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="int_par_id">
        @error('int_par_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div> --}}
    <div>
        <label for="tarif" class="block mt-3 mb-1 font-medium text-sm text-gray-700">int_par_id</label>
        <select name="tarif" id="tarif" style="width: 100%;" wire:model="int_par_id"
            class="block rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            required>
            <option value=""> </option>
            @foreach ($parc as $value)
                <option value={{ $value->par_id }}>{{ $value->par_id }}</option>
            @endforeach
        </select>
        @error('int_par_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Int nb jrs</label>
        <input type="text" class="form-control" id="exampleFormControlInput3" wire:model="int_nb_jrs">
        @error('int_nb_jrs')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
