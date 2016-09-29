<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style type="text/css">
            label.pre {
                display:inline-block;
                width:60px;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"
        type="text/javascript"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"
        type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("form").validate({
                    messages: {
                        name: "Please specify your name.",
                        email: {
                            required: "We need your email address to contact you.",
                            email: "Your email address must be in the format of name@domain.com."
                        },
                        url: "A valid URL, please.",
                        comment: "Please enter your comment."
                    },
                    errorPlacement: function (error, element) {
                        element.focus(function () {
                            $("span").html(error);
                        }).blur(function () {
                            $("span").html('');
                        });
                    }
                });
            });
        </script>
    </head>
    <body>
        <form action="#">
<span></span>
            <div>
                <label class="pre" for="entry_0">Name *</label>
                <input type="text" class="required" name="name" id="entry_0">
            </div>
            <div>
                <label class="pre" for="entry_1">Email *</label>
                <input type="text" class="required email" name="email"
                id="entry_1">
            </div>
            <div>
                <label class="pre" for="entry_2">URL</label>
                <input type="text" class="url" name="url" id="entry_2">
            </div>
            <div>
                <textarea class="required" name="comment" id="entry_3" rows="7" cols="35"></textarea>
            </div>
            <div>
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </body>
</html>