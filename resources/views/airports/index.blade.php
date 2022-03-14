<html>
    <body>
        <h1>List of airports</h1>
        <table class="table table-condensed table-striped">
            @foreach($airports as $airport)
                <tr>
                    <td>
                        {{ $airport->name  }}
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="/airports/new">New airport</a>
    </body>
</html>
