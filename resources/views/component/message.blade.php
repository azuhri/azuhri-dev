@if (session('was_created'))
<div class="err">
    <div class="alert alert-danger" role="alert">
        <span>
                {{session('was_created')}}    
        </span>
        <span>
            <i class="fas fa-window-close"></i>
        </span>
    </div>
</div>
@endif
@if (session('success_created'))
<div class="err">
    <div class="alert alert-success" role="alert">
        <span>
                {{session('success_created')}}    
        </span>
        <span>
            <i class="fas fa-window-close"></i>
        </span>
    </div>
</div>
@endif
@if (session('fail'))
<div class="err">
    <div class="alert alert-danger" role="alert">
        <span>
                {{session('fail')}}    
        </span>
        <span>
            <i class="fas fa-window-close"></i>
        </span>
    </div>
</div>
@endif
@if (session('gagal'))
<div class="err">
    <div class="alert alert-danger" role="alert">
        <span>
                {{session('gagal')}}    
        </span>
        <span>
            <i class="fas fa-window-close"></i>
        </span>
    </div>
</div>
@endif
@error('restaurant_name')
<div class="err3" id="alertS">
<div class="alert alert-danger" role="alert">
    <span>
        @error('restaurant_name')
            {{$message}}    
        @enderror
    </span>
    <span>
        <i class="fas fa-window-close" id="closeS"></i>
    </span>
</div>
</div>
@enderror
@error('name')
<div class="err3" id="alertS">
<div class="alert alert-danger" role="alert">
    <span>
        @error('name')
            {{$message}}    
        @enderror
    </span>
    <span>
        <i class="fas fa-window-close" id="closeS"></i>
    </span>
</div>
</div>
@enderror
@error('nama')
<div class="err3" id="alertS">
<div class="alert alert-danger" role="alert">
    <span>
        @error('nama')
            {{$message}}    
        @enderror
    </span>
    <span>
        <i class="fas fa-window-close" id="closeS"></i>
    </span>
</div>
</div>
@enderror
@error('image')
<div class="err3" id="alertS">
<div class="alert alert-danger" role="alert">
    <span>
        @error('image')
            {{$message}}    
        @enderror
    </span>
    <span>
        <i class="fas fa-window-close" id="closeS"></i>
    </span>
</div>
</div>
@enderror
@error('imageCover')
<div class="err3" id="alertS">
<div class="alert alert-danger" role="alert">
    <span>
        @error('imageCover')
            {{$message}}    
        @enderror
    </span>
    <span>
        <i class="fas fa-window-close" id="closeS"></i>
    </span>
</div>
</div>
@enderror
@error('photoItem')
<div class="err3" id="alertS">
<div class="alert alert-danger" role="alert">
    <span>
        @error('photoItem')
            {{$message}}    
        @enderror
    </span>
    <span>
        <i class="fas fa-window-close" id="closeS"></i>
    </span>
</div>
</div>
@enderror
@error('pass2')
<div class="err3" id="alertS">
<div class="alert alert-danger" role="alert">
    <span>
        @error('pass2')
            {{$message}}    
        @enderror
    </span>
    <span>
        <i class="fas fa-window-close" id="closeS"></i>
    </span>
</div>
</div>
@enderror
@error('email')
<div class="err3" id="alertS">
<div class="alert alert-danger" role="alert">
    <span>
        @error('email')
            {{$message}}    
        @enderror
    </span>
    <span>
        <i class="fas fa-window-close" id="closeS"></i>
    </span>
</div>
</div>
@enderror