<?php


class Footer
{


    /**
     * @return string :scripts to the website
     */
    public static function getScripts()
    {
        return
            '<script type="application/javascript" src="/public/js/jquery-1.11.3.min.js"></script>
                <script type="application/javascript" src="/public/js/app.js"></script>';
    }

    /**
     * @return string :body and html closing tags
     */
    public static function getClosingTags()
    {

        return '</body></html>';
    }

    /**
     * Outputs the website scripts and closes the body and html tags
     */
    public static function doFooter()
    {
        echo self::getScripts().self::getClosingTags();
        return;
    }

}

?>