@extends('layouts.app')

@section(welcome_header)
        <header>
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Link</a></li>
                    <li><a href="">Link</a</li> <li><a href="">Link</a</li> 
                    <li><a href="./contacts.blade.php">Contatti</a></li>

                </ul>


            </nav>
            <div>
                <h1>HEADER SITE</h1>
            </div>
        </header>

        <main>
            <h1>MAIN SITE</h1>
        </main>
  @endsection

  @section('welcome_footer')      
        <footer>
            <h1>FOOTER SITE</h1>
        </footer>
    

@endsection