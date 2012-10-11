<?php header("Content-Type: text/xml;"); ?>
<?php printf('<?xml version="1.0" ?>'); ?>
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" output-encoding="UTF-8" title="Forms Demo" xsi:nonamespaceschemalocation="http://www.netbiscuits.com/schema/netbiscuits.xsd">
    <external type="script" file="scripts/validation.js"/>
    <container>
        <column>
            <?php include('includes/header.php'); ?>
            <TEXT id="errMsg">
                <headline/>
                <richtext/>
            </TEXT>
            <FORM action="thankyou.php" method="POST" name="registration">
                <styles>
                    <style name="padding" value="2"/>
                </styles>
                <row>
                    <cell>
                        <text>Name:</text>
                    </cell>
                </row>
                <row>
                    <cell>
                        <input name="name" required="true" type="text"/>
                    </cell>
                </row>
                <row>
                    <cell>
                        <text>Email:</text>
                    </cell>
                </row>
                <row>
                    <cell>
                        <input name="email" required="true" type="email"/>
                    </cell>
                </row>
                <row>
                    <cell>
                        <text>Phone:</text>
                    </cell>
                </row>
                <row>
                    <cell>
                        <input maxlength="10" name="phone" required="true" type="tel"/>
                    </cell>
                </row>
                <row>
                    <cell>
                        <event id="click" type="onclick">
                            <action eval="myValidateForm()"/>
                        </event>
                        <input name="submitfrm" type="submit" value="Submit"/>
                    </cell>
                </row>
            </FORM>
            <?php include('includes/footer.php'); ?>
        </column>
    </container>
</page>