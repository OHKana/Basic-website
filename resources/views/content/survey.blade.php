@extends('master')

@section('content')

	<div>

        <h1 align="center"> Servey From </h1>
            <from>
             <fieldset height="100" weight="50">

            <p align="center">
                    Let us know how you can improve web development skill
            </p>

            </br>

            <P align="center">
                <b> Name:</b> <input type="text" name ="textbox1" placeholder="Enter your name" required>
            </p>


            <P align="center">
                <b> Contact:</b> <input type="text" name ="textbox2" pattern="0-9" placeholder="Enter your Phone Number" required>

            </p>

            <p align="center">
                <b> Email:</B> <input type="email" name ="textbox3" placeholder="Enter your email" required>
            </P>

            <p align="center">
                <b> Gender:</B>
                <select>
                    <option> Male </option>
                    <option>Female </option>
                    <option> Others </option>
                </select>
            </P>


            <P align="center">
                <b>Which course have you learn already?</b></br>
                <input type="radio" style=" margin-left: 25px;" >HTML</br>
                <input type="radio">CSS</br>
                <input type="radio" style=" margin-left: 50px;">Java Script</br>
                <input type="radio" style=" margin-left: 40px;">bootstrap</br>
            </p>

            <p align="center">
                <b>Things that you want to learn in future?</b></br>
                <input type="checkbox">PHP</br>
                <input type="checkbox">SQL</br>
                <input type="checkbox">FRont End Project</br>
            </P>

            <P align="center">
                <b>any comment</b>
                </br>
                <textarea name="t1" rows="3" cols="25">
                </textarea>
            </P>

            <p align="center">
                <input type="submit" value="submit">
            </p>

            </fieldset>
            </from>


            </div>

@endsection
