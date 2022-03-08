<div class="tile">
    <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">SMTP Settings</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="smtp_method">SMTP Method</label>
                <select name="smtp_method" id="smtp_method" class="form-control">
                    <option value="1" {{ (config('settings.smtp_method')) == 1 ? 'selected' : '' }}>Enabled</option>
                    <option value="0" {{ (config('settings.smtp_method')) == 0 ? 'selected' : '' }}>Disabled</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label" for="smtp_host">SMTP Host</label>
                <input class="form-control" type="text" placeholder="Enter SMTP Host" id="smtp_host" name="smtp_host" value="{{ config('settings.smtp_host') }}"
                />
            </div>  
            <div class="form-group">
                <label class="control-label" for="smtp_user">SMTP Username</label>
                <input class="form-control" type="text" placeholder="Enter SMTP Username" id="smtp_user" name="smtp_user" value="{{ config('settings.smtp_user') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="smtp_password">SMTP Password</label>
                <input class="form-control" type="text" placeholder="Enter SMTP Password" id="smtp_password" name="smtp_password" value="{{ config('settings.smtp_password') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="smtp_port">SMTP Port</label>
                <input class="form-control" type="text" placeholder="Enter SMTP Port" id="smtp_port" name="smtp_port" value="{{ config('settings.smtp_port') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="smtp_type">SMTP Type</label>
                <select name="smtp_type" id="smtp_type" class="form-control">
                    <option value="TLS" {{ (config('settings.smtp_type')) == "TLS" ? 'selected' : '' }}>TLS</option>
                    <option value="SSL" {{ (config('settings.smtp_type')) == "SSL" ? 'selected' : '' }}>SSL</option>
                </select>
            </div>         
        </div>
        <div class="tile-footer">
            <div class="row d-print-none mt-2">
                <div class="col-12 text-right">
                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                </div>
            </div>
        </div>
    </form>
</div>