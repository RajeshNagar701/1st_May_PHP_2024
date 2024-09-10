
<?php
/*
What is blade template

The Blade is a powerful templating engine in a Laravel framework. 
The blade allows to use the templating engine easily, and it makes the 
syntax writing very simple. 
The blade templating engine provides its own structure such as conditional 
statements and loops. 

To create a blade template, you just need to create a view file and 
save it with a .blade.php extension instead of .php extension. 


*/
?>


<?php
echo "Hello";

echo "<h1>Hello</h1>";
?>


{{-- Comment --}}

{{"Hello"}}
<h1>{{"Hello"}}</h1>

<h1>{{10+10}}</h1>
<h1><?php echo 10+10; ?></h1>

{{--

Blade Conditional Directives
@php @endphp
@if , @elseif ,@else and @endif  
@unless , @endunless // inverse of if / opposite of if 
@isset @endisset  

--}}

@php
    $a=10;
@endphp

{{$a}}

<?php $name="nagar"?>
@if($name=="Raj")
<h1>Hi my name is {{$name}}</h1>
@elseif($name=="nagar")
<h1>Hi my name is {{$name}}</h1>
@else
<h1>Unknown</h1>	
@endif


{{-- 
    
Blade Looping Directives

@for and @endfor
@while and @endwhile
@foreach and @endforeach
@break @continue

--}}

@for($i=0;$i<10;$i++)
    <h1>{{$i}}</h1>
@endfor


@php $data=['sam','raj','mahesh']; @endphp

@foreach($data as $d)
<h4>{{$d}}</h4>
@endforeach



{{-- 

    Layout Blade Directives
@include
@yield directive is used to display the content of a given section
@section and @endsection   directives define a section of content

@extends blade directives specify which layout the child view should “inherit”

@stack  render the complete stack content , pass the name of the stake
@push and @endpush  is used to push the stack

--}}

@include('mypage')