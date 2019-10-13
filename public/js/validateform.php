<script>
    function validateFormForCourse() {
        var cname = document.forms["myForm"]["cName"].value;
        var ccode = document.forms["myForm"]["cCode"].value;
        if (cname == "" || ccode == "") {
            alert("All the fields must be filled out");
            return false;
        }
        if(ccode < 0) {
            alert("Invalid Course code, Course code must be greater than 0");
            return false;
        }
    }

    function validateFormForStudent() {
        var fname = document.forms["myForm"]["fName"].value;
        var lname = document.forms["myForm"]["lName"].value;
        var cgpa = document.forms["myForm"]["CGPA"].value;
        if (fname == "" || lname == "" || cgpa == "" ) {
            alert("All the fields must be filled out");
            return false;
        }
        if(cgpa > 4 || cgpa < 0) {
            alert("Invalid CGPA, CGPA must be greater than 0 AND less than 4 ");
            return false;
        }
    }

    function validateFormForTeacher() {
        var fname = document.forms["myForm"]["fName"].value;
        var lname = document.forms["myForm"]["lName"].value;
        if (fname == "" || lname == "") {
            alert("All the fields must be filled out");
            return false;
        }
    }
</script>
