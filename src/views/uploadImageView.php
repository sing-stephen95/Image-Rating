<?php


require_once "View.php";

class uploadImageView extends View
{
    /**
     * Method used to draw upload image web page.
     *
     * @param array $data data from the controller based on previously submitted
     *  emails
     */
    public function render($data)
    {
        ?>
        <!DOCTYPE html>
        <html lang="en-US" dir="ltr">
        <head>
            <title>Upload Image</title>
            <meta charset="utf-8" />
        </head>
        
        <body>
            <h1 align="center">Upload Image</h1>

            <form id="upload" action="register.php" method="post" align="center">
            <fieldset>
        
                <input type="hidden" name="submitted" id="submitted" value="1"/>
                <label for="pic" >Picture(.jpeg only)*:</label>
                <input type="file" name="pic" id="pic" accept="image/jpeg"/><br></br>
                <label for="caption" >Caption*:</label>
                <input type="text" name="caption" id="caption" maxlength="140" /><br></br>
                <input type="submit" name="Submit" value="Submit" />
             
            </fieldset>
            </form>
        
        <?php
        /*
        NEED TO BE REPLACED

        if (!empty($data['PREVIOUS_EMAIL'])) {
            ?>
            <p>The last email entered was:</p>
            <p><?=$data['PREVIOUS_EMAIL'] ?></p>
            <?php
            if (isset($data['PREVIOUS_EMAIL_VALID']) &&
                $data['PREVIOUS_EMAIL_VALID'] === true) {
                ?>
                <p>It was valid!</p>
                <?php
            } else {
                ?>
                <p>It was not valid!</p>
                <?php
            }
        }
        */
        ?>
        
        </body>
        </html>
        <?php
    }
}
