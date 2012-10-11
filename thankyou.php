<?php header("Content-Type: text/xml;"); ?>
<?php printf('<?xml version="1.0" ?>'); ?>
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" output-encoding="UTF-8" title="Forms Demo" xsd-version="1.12" xsi:nonamespaceschemalocation="http://www.netbiscuits.com/schema/netbiscuits-1.12.xsd">
    <container>
        <column>
            <?php include('includes/header.php'); ?>
            <TEXT>
                <headline/>
                <richtext>Thank you, your entry has been recorded.</richtext>
            </TEXT>
            <?php include('includes/footer.php'); ?>
        </column>
    </container>
</page>