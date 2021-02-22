@extends('layouts.app')
@section('contacts_header')
        <header>
            <nav>
                <ul>
                    <li><a href="./welcome.blade.php">Home</a></li>
                    <li><a href="">Link</a></li>
                    <li><a href="">Link</a</li> 
                    <li><a href="">Link</a</li> <li><a href="">Contatti</a></li>

                </ul>

            </nav>
            <div>
                <h1>Contact Us</h1>
            </div>

        </header>

        <div class="box_contact">
            <textarea name="" id="" cols="30" rows="10" placeholder="Type a message for getting support..."></textarea>

            <button>Send Request</button>
        </div>
@endsection

@section('contact_footer')
        <footer>
            <h1>FOOTER SITE</h1>
        </footer>
    
@endsection