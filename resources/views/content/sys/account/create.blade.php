<form action="/admin/account/{{ $id ?? '' }}" method="POST" class="list-group">
    @csrf
    <div class="">
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="mods[projects]">
            <label class="form-check-label" for="projects">Projects</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="mods[reports]">
            <label class="form-check-label" for="reports">Reports</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="mods[inventory]">
            <label class="form-check-label" for="inventory">Inventory</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="mods[documedia]">
            <label class="form-check-label" for="documedia">Documents & Media</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="mods[operations]" {!! $mods['operations']? ' checked': '' !!}>
            <label class="form-check-label" for="operations">Business Operations</label>
        </div>
    </div>
    <hr>
    <div class="">
        <div class="form-check form-check-inline">
            @isset($id)
            <button name="_method" value="PATCH" type="submit" class="btn btn-primary mx-3"><i class="fa fa-save"></i> Update</button>
            <button name="_method" value="DELETE" type="submit" class="btn btn-danger mx-3"><i class="fa fa-trash"></i> Delete</button>
            @else
            <button type="submit" class="btn btn-primary mx-3"><i class="fa fa-save"></i> Save</button>
            @endisset
        </div>
    </div>
</form>
