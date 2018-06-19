@extends('main')

@section('content')
    <h1 style="text-align: center">Особистий кабінет студента</h1>

    <div class="row">

        <div class="col-sm-3 text-center">

           <div class="container-fluid studleft">
               <h4>{{$students->surname}}</h4>
               <h4>{{$students->name}}</h4>
        </div>

<div class="container-fluid studright" onclick="window.open('https://kaf-ztri.slack.com/', '_blank');">
            <h4 style="color: red">ЧАТ</h4>
            <p>кафедри та груп</p>
        </div>

    </div>


        <div class="col-sm-9">
            <div class="container-fluid studpam">
            <h3 style="text-align: center">Пам'ятка студенту!</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in ultricies nibh. Aenean pretium arcu
                non viverra bibendum. Mauris est felis, imperdiet at iaculis id, venenatis non erat. Nulla vestibulum ut
                turpis a convallis. Sed nunc libero, rhoncus vestibulum diam accumsan, interdum varius tortor. Nunc
                maximus sed lorem pharetra pretium. Proin eget ante volutpat lorem imperdiet malesuada sit amet nec
                justo. Vestibulum elementum, est at pulvinar rhoncus, tellus metus condimentum elit, quis iaculis arcu
                orci ac augue. Nullam semper condimentum metus, vitae placerat neque sagittis ac. Cras facilisis
                fermentum lorem et consectetur. Phasellus rutrum suscipit enim vitae posuere. Etiam a hendrerit erat,
                sit amet dignissim felis. Sed nec dapibus augue. Phasellus sit amet commodo urna, nec fringilla tortor.
                Nulla malesuada arcu nec nunc aliquet, vitae mollis quam finibus. Pellentesque blandit magna est, id
                fermentum nisl pharetra ac.

                Quisque sed nibh ac ipsum porttitor finibus at pulvinar lorem. Phasellus convallis in dui eget posuere.
                Mauris sit amet tempus leo. Aliquam aliquet accumsan libero id finibus. Nunc lobortis consequat lorem,
                ut cursus ligula aliquet sit amet. Sed semper lacinia condimentum. Donec sodales pulvinar risus vel
                posuere. Etiam quis aliquet mi, eget mattis mi. Sed at mauris vitae nisl ultricies mollis eu quis nisi
                . Aenean consequat sodales elit ac rhoncus. Mauris non pretium nisi, nec aliquet massa. Nam rutrum,
                orci hendrerit semper feugiat, purus diam malesuada est, eu suscipit turpis ex nec libero. Donec luctus
                convallis pharetra. Suspendisse sit amet lectus vel risus tincidunt viverra. Vestibulum mollis malesuada
                nunc ac pulvinar. Proin ut sapien non felis accumsan ullamcorper.

                Etiam in diam id erat mattis condimentum eget eu massa. Cras et auctor eros. Duis fermentum arcu in nibh
                fermentum, quis elementum enim efficitur. Proin a lacinia erat, eget ornare odio. Morbi ut congue nisl,
                a commodo risus. Nullam quis risus velit. Phasellus sit amet rutrum tellus, ut sodales tellus. Quisque
                at nisl justo.

                Ut vitae risus est. Maecenas porta sapien vitae elit vulputate imperdiet. Curabitur ac ultricies metus
                Aliquam sed dui ut nibh mollis tincidunt. Vivamus erat ex, bibendum non est ac, pellentesque placerat
                diam. Sed accumsan tortor nisi, a scelerisque metus posuere sit amet. Donec vitae consectetur magna.
                Duis condimentum tellus arcu, a luctus metus molestie in. Aliquam interdum lacinia nisi. Integer commodo
                libero dolor, in imperdiet felis mattis non. Proin quis leo ut quam feugiat luctus vitae ac massa.
                Praesent sodales orci blandit, ultrices velit quis, tristique turpis. Etiam vitae dignissim metus.
                Fusce et dolor sit amet tellus viverra sodales faucibus eget leo. Quisque maximus hendrerit lorem vel
                molestie.

                Vestibulum ultricies mauris eu finibus vulputate. Donec semper ligula ac lectus vestibulum, a pulvinar
                elit mollis. Curabitur egestas ultricies purus aliquam pretium. Maecenas dignissim justo sit amet
                ligula sagittis posuere. Duis sit amet vestibulum lorem, id congue odio. Donec diam velit, lobortis
                feugiat auctor id, ornare eu leo. Morbi at ex tristique, euismod lectus sit amet, tempus nulla.
                Maecenas vel porttitor ligula, sit amet imperdiet nisi. Nullam rhoncus gravida arcu eget maximus.
                Quisque et leo in erat tristique egestas. Nam pharetra arcu at risus aliquet, ut tempus diam mattis.
                Aenean porta tellus sit amet nulla ullamcorper, viverra tincidunt magna egestas.</p>
        </div>
        </div>

    </div>
    @endsection