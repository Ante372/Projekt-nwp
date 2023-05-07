<?php
    print '
          <h1>Obrazac za kontakt</h1>
          <div id="contact">
            <iframe src="https://maps.google.com/maps?q=zagreba%C4%8Dka%20ulica%20osijek&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            <form action="send-contact1.html" id="contact_form" name="contact_form" method="POST">
              <label for="fname">First Name *</label>
    <input type="text" id="fname" name="firstname" placeholder="Unesite ime.." required>

    <label for="lname">Last Name *</label>
    <input type="text" id="lname" name="lastname" placeholder="Unesite prezime.." required>

    <label for="lname">Your E-mail *</label>
    <input type="email" id="email" name="email" placeholder="Unesite email.." required>

    <label for="country">Zemlja</label>
    <select id="country" name="country">
      <option value="">Odaberite</option>
      <option value="BE">Belgija</option>
      <option value="HR" selected>Hrvatska</option>
      <option value="LU">Luksemburg</option>
      <option value="HU">Madjarska</option>
    </select>

    <label for="subject">Upit</label>
    <textarea id="subject" name="subject" placeholder="Unesite Vas upit.." style="height:200px"></textarea>

    <input type="submit" value="Posalji">
  </form>
</div>';
?>
