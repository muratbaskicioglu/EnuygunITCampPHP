<form id="contact_form" class="contact-form" method="post" action="http://enuygun.com:80?page=form">
    <label for="fullname">Fullname: </label>
    <input id="fullname" name="fullname" type="text" placeholder="Enter your fullname" />
    <br />
    <label for="email">Email: </label>
    <input id="email" name="email" type="email" placeholder="Enter your email address" />
    <br />
    <label for="contact">Contact: </label>
    <select id="country" name="contact">
        <option selected>Please, select your city</option>
        <option value="Sakarya">Sakarya</option>
        <option value="İstanbul">İstanbul</option>
        <option value="Edirne">Edirne</option>
    </select>
    <br />
    <span>Gender: </span>
    <input id="male_gender" name="gender" type="radio" value="Male" checked />
    <label for="male_gender">Male</label>
    <input id="female_gender" name="gender" type="radio" value="Female" />
    <label for="female_gender">Female</label>
    <br />
    <div>What tutorial do you learn currently on: </div>
    <input id="html_tut" name="tutorial[]" type="checkbox" value="html" />
    <label for="html_tut">HTML</label>
    <input id="css_tut" name="tutorial[]" type="checkbox" value="css" />
    <label for="css_tut">CSS</label>
    <br />
    <input id="javascript_tut" name="tutorial[]" type="checkbox" value="javascript" />
    <label for="javascript_tut">JavaScript</label>
    <input id="php_tut" name="tutorial[]" type="checkbox" value="php" />
    <label for="php_tut">PHP</label>
    <br />
    <label for="message">Message: </label>
    <br />
    <textarea id="message" name="message" cols="40" rows="5" placeholder="Send your feedback"></textarea>
    <br />
    <input type="submit" value="Submit" />
</form>
