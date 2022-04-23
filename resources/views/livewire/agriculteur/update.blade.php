<form>
    <div class="form-group">
        <input type="hidden" wire:model="emp_nss">
        <label for="exampleFormControlInput1">Emp_nom</label>
        <input type="emp_nom" class="form-control" wire:model="emp_nom" id="exampleFormControlInput1">
        @error('emp_nom')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Agr_Prenom</label>
        <input type="text" class="form-control" wire:model="emp_prn" id="exampleFormControlInput2">
        @error('emp_prn')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Emp_tarif</label>
        <input type="text" class="form-control" wire:model="emp_tarif" id="exampleFormControlInput3">
        @error('emp_tarif')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>
