@php ($i = 1)
@foreach($categories as $category)
<div>
    ({{$i}}){{$category->tittle}}
    @php ($j = 1)
       @foreach($category->children as $child)
            <div style="margin-left:30px">
               ({{$j}}) {{$child->tittle}}  
                @php ($k = 1)
                    @foreach($child->children as $sub_child)
                        <div style="margin-left:30px">
                          ({{$k}})  {{$sub_child->tittle}}
                             @php ($l = 1)
                            @foreach($sub_child->children as $sub_child1)
                                <div style="margin-left:30px">
                                    ({{$l}}){{$sub_child1->tittle}}
                                
                                    @php ($m = 1)
                                        @foreach($sub_child1->children as $sub_child2)
                                            <div style="margin-left:30px">
                                             ({{$m}}){{$sub_child2->tittle}}  
                                            </div>

                                        @php ($m++)
                                        @endforeach
                                </div>
                            @php ($l++)
                            @endforeach
                        </div>
                    @php ($k++)
                    @endforeach
            </div>
        @php ($j++)
        @endforeach
</div>
   @php ($i++)
@endforeach