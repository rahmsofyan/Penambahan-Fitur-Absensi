<table class="table table-bordered table-striped table-hover" id="tableagen" style="width:100%">
    <thead> 
        <tr> 
            <th>#</th>
        <th>NRP</th>
        <th colspan="3">Nama</th>
            @for ($i =1 ;$i <$jmlPertemuan; $i++)
        <th>p{{$i}}</th>
            @endfor
        </tr> 

    </thead>
   
    <tbody>
        @foreach($FilterKehadiranMahasiswa as $key => $row)
        <tr>

            <td> {{ $key+1}}</td>
            <td> {{ $row['nrp']}}</td>
            <td colspan="3"> {{ $row['nama'] }}</td>
            @foreach ($row['pertemuan']['kehadiran'] as $key2 => $pertemuan)
                <td class="tabelkehadiran"><span 
                     @switch($pertemuan['status'])
                        @case('izin')
                            id='{{$pertemuan['status']}}' val={{$pertemuan['value']}} class="glyphicon glyphicon-italic " style="color:blue"
                            @break
                        @case('special')
                            id='{{$pertemuan['status']}}' val={{$pertemuan['value']}} class="glyphicon glyphicon-home" style="color:grey"
                            @break
                        @case('ontime')
                            id='{{$pertemuan['status']}}' val={{$pertemuan['value']}} class='glyphicon glyphicon-ok-sign' style='color:rgb(0,200,0)'
                            @break
                        @case('alpha')
                            id='{{$pertemuan['status']}}' val={{$pertemuan['value']}} class="glyphicon glyphicon-remove" style="color:red"
                            @break
                        @case('intolerance')
                            id='{{$pertemuan['status']}}' val={{$pertemuan['value']}} class='glyphicon glyphicon-ok-circle' style='color:rgb($color,200,0)'
                            @break
                        @case('late')
                            id='{{$pertemuan['status']}}' val={{$pertemuan['value']}} class='glyphicon glyphicon-exclamation-sign' style='color:rgb(255,200,0);'
                            @break
                        @default
                    @endswitch
                    ></span></td>
            @endforeach
        </tr>
        @endforeach
   </tbody>

    <tr>
        <td colspan="20"></td>
    </tr>
    @foreach ($Rekapitulasi as $statushadir => $row)
        <tr> <td>#</td>
            <td colspan="4">{{$statushadir}}</td>
            <td colspan='{{$jmlPertemuan}}'></td>
        </tr> 
        @foreach ($row as $key=>$jenis)
        <tr><td></td><td></td>
            <td colspan="3">{{$key}}</td>
            @for ($i = 1; $i < $jmlPertemuan; $i++)    
            <td>{{$jenis['p'.$i]}}</td>
            @endfor
            @endforeach
        </tr>
    <tr><td colspan='{{$jmlPertemuan}}'></td></tr>
    @endforeach
    
   </table>