<label for="name">Name:</label>
<div class="form-group">
    <input type="text" name="name" class="form-control">
</div>
<div class="text-danger">{{ $errors->first('name') }}</div>
<label for="email">Email:</label>
<div class="form-group">
    <input type="email" name="email" class="form-control">
</div>
<div class="text-danger">{{ $errors->first('email') }}</div>
<label for="active">Active/Inactive:</label>
<div class="form-group">
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Select customer status</option>
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>
</div>
<label for="company_id">Company:</label>
<div class="form-group">
    <select name="company_id" id="company_id" class="form-control">
        <option value="" disabled>Select company</option>
        @foreach ($companies as $company)
            <option value="{{ $company->id }}">{{ $company->name }}</option>
        @endforeach
    </select>
</div>
@csrf