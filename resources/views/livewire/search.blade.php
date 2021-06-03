<div>
    <input wire:model="search" class="input search-input" name="search" type="text"  list="mylist" placeholder="Search product..."/>

    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
