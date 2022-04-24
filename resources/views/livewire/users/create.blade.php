<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">User name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title"
            wire:model="name">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">User role </label>
        <select name="role" id="role" style="width: 100%;" wire:model="role"
            class="block rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            required>
            <option value=""> </option>
            <option value="admin"> Admin </option>
            <option value="editor"> Editor </option>
            <option value="viewer"> Viewer </option>
        </select>
        @error('role')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">User email</label>
        <input type="email" class="form-control" id="exampleFormControlInput3" wire:model="email">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">User password</label>
        <input type="password" class="form-control" id="exampleFormControlInput3" wire:model="password">
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
