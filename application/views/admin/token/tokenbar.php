<div id='tokenbar' class='menubar'>
    <div class='menubar-title ui-widget-header'>
        <strong><?php $clang->eT("Token control"); ?> </strong> <?php echo htmlspecialchars($thissurvey['surveyls_title']); ?>
    </div>
    <div class='menubar-main'>
        <div class='menubar-left'>
            <a href="<?php echo $this->createUrl("admin/survey/view/surveyid/$surveyid"); ?>" title='<?php $clang->eTview("Return to survey administration"); ?>'><img src='<?php echo $imageurl; ?>home.png' alt='<?php $clang->eT("Return to survey administration"); ?>' /></a>
            <img src='<?php echo $imageurl; ?>separator.gif' class='separator' alt='' />
            <a href="<?php echo $this->createUrl("admin/tokens/index/surveyid/$surveyid"); ?>" title='<?php $clang->eTview("Show token summary"); ?>'><img src='<?php echo $imageurl; ?>summary.png' alt='<?php $clang->eT("Show token summary"); ?>'/></a>
            <img src='<?php echo $imageurl; ?>separator.gif' class='separator' alt='' />
            <a href="<?php echo $this->createUrl("admin/tokens/browse/surveyid/$surveyid"); ?>"
                title='<?php $clang->eTview("Display tokens"); ?>' >
                <img src='<?php echo $imageurl; ?>document.png' alt='<?php $clang->eT("Display tokens"); ?>' />
            </a>
            <?php if (hasSurveyPermission($surveyid, 'tokens', 'create'))
                { ?>
                <a href="<?php echo $this->createUrl("admin/tokens/addnew/surveyid/$surveyid"); ?>"
                    title='<?php $clang->eTview("Add new token entry"); ?>' >
                    <img src='<?php echo $imageurl; ?>add.png' title='' alt='<?php $clang->eT("Add new token entry"); ?>' />
                </a>
                <a href="<?php echo $this->createUrl("admin/tokens/adddummies/surveyid/$surveyid"); ?>"
                    title='<?php $clang->eTview("Add dummy tokens"); ?>' >
                    <img src='<?php echo $imageurl; ?>create_dummy_token.png' title='' alt='<?php $clang->eT("Add dummy tokens"); ?>' />
                </a>

                <?php
                }
                if (hasSurveyPermission($surveyid, 'tokens', 'update'))
                {
                ?>
                <img src='<?php echo $imageurl; ?>separator.gif' class='separator' alt='' />
                <a href="<?php echo $this->createUrl("admin/tokens/managetokenattributes/surveyid/$surveyid"); ?>"
                    title='<?php $clang->eTview("Manage additional attribute fields"); ?>'>
                    <img src='<?php echo $imageurl; ?>token_manage.png' title='' alt='<?php $clang->eT("Manage additional attribute fields"); ?>' />
                </a>
                <?php
                }
                if (hasSurveyPermission($surveyid, 'tokens', 'import'))
                {
                ?>
                <img src='<?php echo $imageurl; ?>separator.gif' class='separator' alt='' />
                <a href="<?php echo $this->createUrl("admin/tokens/import/surveyid/$surveyid") ?>"
                    title='<?php $clang->eTview("Import tokens from CSV file"); ?>'>
                    <img src='<?php echo $imageurl; ?>importcsv.png' title='' alt='<?php $clang->eT("Import tokens from CSV file"); ?>' />
                </a>
                <a href="<?php echo $this->createUrl("admin/tokens/importldap/surveyid/$surveyid") ?>"
                    title='<?php $clang->eTview("Import tokens from LDAP query"); ?>'>
                    <img src='<?php echo $imageurl; ?>importldap.png' alt='<?php $clang->eT("Import tokens from LDAP query"); ?>' />
                </a>
                <?php
                }
                if (hasSurveyPermission($surveyid, 'tokens', 'export'))
                {
                ?>
                <a href="<?php echo $this->createUrl("admin/tokens/exportdialog/surveyid/$surveyid"); ?>"
                    title='<?php $clang->eTview("Export tokens to CSV file"); ?>'>
                    <img src='<?php echo $imageurl; ?>exportcsv.png' alt='<?php $clang->eT("Export tokens to CSV file"); ?>' />
                </a>
                <?php
                }
                if (hasSurveyPermission($surveyid, 'tokens', 'update'))
                {
                ?>
                <img src='<?php echo $imageurl; ?>separator.gif' class='separator' alt='' />
                <a href='<?php echo $this->createUrl("admin/emailtemplates/index/surveyid/$surveyid"); ?>' title='<?php $clang->eTview("Edit email templates"); ?>'>
                    <img src='<?php echo $imageurl; ?>emailtemplates.png' alt='<?php $clang->eT("Edit email templates"); ?>' />
                </a>
                <a href="<?php echo $this->createUrl("admin/tokens/email/surveyid/$surveyid"); ?>"
                    title='<?php $clang->eTview("Send email invitation"); ?>'>
                    <img src='<?php echo $imageurl; ?>invite.png' alt='<?php $clang->eT("Send email invitation"); ?>' />
                </a>
                <a href="<?php echo $this->createUrl("admin/tokens/email/action/remind/surveyid/$surveyid"); ?>"
                    title='<?php $clang->eTview("Send email reminder"); ?>'>
                    <img src='<?php echo $imageurl; ?>remind.png' alt='<?php $clang->eT("Send email reminder"); ?>' />
                </a>
                <img src='<?php echo $imageurl; ?>separator.gif' class='separator' alt='' />
                <a href="<?php echo $this->createUrl("admin/tokens/tokenify/surveyid/$surveyid"); ?>"
                    title='<?php $clang->eTview("Generate tokens"); ?>'>
                    <img src='<?php echo $imageurl; ?>tokenify.png' alt='<?php $clang->eT("Generate tokens"); ?>' />
                </a>
                <img src='<?php echo $imageurl; ?>separator.gif' class='separator' alt='' />
                <?php
                }
                if (hasSurveyPermission($surveyid, 'tokens', 'update'))
                {
                ?>
                <a href="<?php echo $this->createUrl("admin/tokens/bouncesettings/surveyid/$surveyid"); ?>"
                    title='<?php $clang->eTview("Bounce processing settings"); ?>' >
                    <img src='<?php echo $imageurl; ?>bounce_settings.png' alt='<?php $clang->eT("Bounce settings"); ?>' />
                </a>
                <img src='<?php echo $imageurl; ?>separator.gif' class='separator' alt='' />
                <?php
                }
                if (hasSurveyPermission($surveyid, 'surveyactivation', 'update') || HasSurveyPermission($surveyid, 'tokens','delete'))
                {
                ?>
                <a href="<?php echo $this->createUrl("admin/tokens/kill/surveyid/$surveyid"); ?>">
                    <img src='<?php echo $imageurl; ?>delete.png' alt='<?php $clang->eT("Delete tokens table"); ?>' />
                </a>
                <?php } ?>
        </div>
        <div class='menubar-right'><a href="#" onclick="showhelp('show')" title='<?php $clang->eTview("Show help"); ?>'>
                <img src='<?php echo $imageurl; ?>showhelp.png' alt='<?php $clang->eT("Show help"); ?>' /></a>
        </div>
    </div>
</div>
<script type="text/javascript">
    <!--
    for(i=0; i<document.forms.length; i++)
        {
        var el = document.createElement('input');
        el.type = 'hidden';
        el.name = 'checksessionbypost';
        el.value = 'kb9e2u4s55';
        document.forms[i].appendChild(el);
    }

    function addHiddenElement(theform,thename,thevalue)
    {
        var myel = document.createElement('input');
        myel.type = 'hidden';
        myel.name = thename;
        theform.appendChild(myel);
        myel.value = thevalue;
        return myel;
    }

    function sendPost(myaction,checkcode,arrayparam,arrayval)
    {
        var myform = document.createElement('form');
        document.body.appendChild(myform);
        myform.action =myaction;
        myform.method = 'POST';
        for (i=0;i<arrayparam.length;i++)
            {
            addHiddenElement(myform,arrayparam[i],arrayval[i])
        }
        addHiddenElement(myform,'checksessionbypost',checkcode)
        myform.submit();
    }

    //-->
</script>
