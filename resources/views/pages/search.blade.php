@extends('main')

@section('content')
    <div class="container-fluid">
        <div class="row spec">
            <div class="col-sm-12 text-center" >
@php
//$findtext = $query;
// $pattern = "/((?:^|>)[^<]*)(".$findtext.")/si";
//$replace = '$1<b style="color:#FF0000; background:#FFFF00;">$2</b>';
// $text = preg_replace($pattern, $replace, $findtext);
//echo"<hr />".$text."<hr />";
@endphp

                        <h3>Результати пошуку:</h3>

                    <div class="panel-body search">
                        @foreach ($articles as $article)
                            <H3><a href="news/{{$article->id}}">{{$article->title}} {{$article->id}} </a></H3>
                            <h4>{{$article->created_at}}</h4>

                            @php

                                    $findtext = $query;
                                    $pattern = "/.{0,30}(".$findtext.").{0,30}/siu";
                                    $replace = '$1<b style="color:#FF0000; background:#FFFF00;">$2</b>';
                                        preg_match_all($pattern,$article->description,$m);
                             //           echo "RERE". var_export($m,1);
                                     $pattern_highlight = "/((?:^|>)[^<]*)(".$findtext.")/siu";

                            $search_res='';
                            foreach ($m[0] as $res){
                             $text = preg_replace($pattern_highlight, $replace, $res);
                           $search_res.=$text.'........';
                            }
                             echo"<hr />".$search_res."<hr />";
                            @endphp



                        @endforeach
                            @foreach ($teachers as $teacher)
                                {{$query}}
                                <H3><a href="teachers/{{$teacher->id}}">{{$teacher->FIO}}</a></H3>
                                <hr>
                            @endforeach



                        {{ $articles->links() }}

                    </div>

            </div>
        </div>
    </div>




    @endsection