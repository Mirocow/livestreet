{assign var="sidebarPosition" value='left'}
{include file='header.tpl'}

{assign var="oSession" value=$oUserProfile->getSession()}
{assign var="oVote" value=$oUserProfile->getVote()}
{assign var="oGeoTarget" value=$oUserProfile->getGeoTarget()}


			
{include file='actions/ActionProfile/profile_top.tpl'}
<h3 class="profile-page-header">Информация</h3>



{if $oUserProfile->getProfileSex()!='other' || $oUserProfile->getProfileBirthday() || $oGeoTarget || $oUserProfile->getProfileAbout() || $oUserProfile->getProfileSite() || count($aUserFields)}
	<h2 class="header-table">{$aLang.profile_privat}</h2>
	
	
	<table class="table table-profile-info">		
		{if $oUserProfile->getProfileSex()!='other'}
			<tr>
				<td class="cell-label">{$aLang.profile_sex}:</td>
				<td>
					{if $oUserProfile->getProfileSex()=='man'}
						{$aLang.profile_sex_man}
					{else}
						{$aLang.profile_sex_woman}
					{/if}
				</td>
			</tr>
		{/if}
			
			
		{if $oUserProfile->getProfileBirthday()}
			<tr>
				<td class="cell-label">{$aLang.profile_birthday}:</td>
				<td>{date_format date=$oUserProfile->getProfileBirthday() format="j F Y"}</td>
			</tr>
		{/if}
		
		
		{if $oGeoTarget}
			<tr>
				<td class="cell-label">{$aLang.profile_place}:</td>
				<td>
					{if $oGeoTarget->getCountryId()}
						<a href="{router page='people'}country/{$oGeoTarget->getCountryId()}/">{$oUserProfile->getProfileCountry()|escape:'html'}</a>{if $oGeoTarget->getCityId()},{/if}
					{/if}
					
					{if $oGeoTarget->getCityId()}
						<a href="{router page='people'}city/{$oGeoTarget->getCityId()}/">{$oUserProfile->getProfileCity()|escape:'html'}</a>
					{/if}
				</td>
			</tr>
		{/if}
							
							
		{if $oUserProfile->getProfileAbout()}					
			<tr>
				<td class="cell-label">{$aLang.profile_about}:</td>
				<td>{$oUserProfile->getProfileAbout()|escape:'html'}</td>
			</tr>	
		{/if}
		
		
		{if $oUserProfile->getProfileSite()}
			<tr>
				<td class="cell-label">{$aLang.profile_site}:</td>
				<td>
					<a href="{$oUserProfile->getProfileSite(true)|escape:'html'}" rel="nofollow">
						{if $oUserProfile->getProfileSiteName()}
							{$oUserProfile->getProfileSiteName()|escape:'html'}
						{else}
							{$oUserProfile->getProfileSite()|escape:'html'}
						{/if}
					</a>
				</td>
			</tr>
		{/if}

		
		
		{hook run='profile_whois_privat_item' oUserProfile=$oUserProfile}
	</table>
{/if}



{assign var="aUserFieldContactValues" value=$oUserProfile->getUserFieldValues(true,array('contact', ''))}
{if $aUserFieldContactValues || $oUserProfile->getProfileIcq() || count($aUserFields)}
	<h2 class="header-table">{$aLang.profile_contacts}</h2>
	
	<table class="table table-profile-info">
		{if $oUserProfile->getProfileIcq()}
			<tr>
				<td class="cell-label"><i class="icon-contact icon-contact-icq"></i> ICQ:</td>
				<td><a href="http://www.icq.com/people/about_me.php?uin={$oUserProfile->getProfileIcq()|escape:'html'}" target="_blank">{$oUserProfile->getProfileIcq()}</a></td>
			</tr>
		{/if}
		
		
		{foreach from=$aUserFieldContactValues item=oField}
			<tr>
				<td class="cell-label"><i class="icon-contact icon-contact-{$oField->getName()}"></i> {$oField->getTitle()|escape:'html'}:</td>
				<td>{$oField->getValue(true,true)}</td>
			</tr>
		{/foreach}
	</table>
{/if}


{assign var="aUserFieldContactValues" value=$oUserProfile->getUserFieldValues(true,array('social'))}
{if $aUserFieldContactValues}
	<h2 class="header-table">{$aLang.profile_social}</h2>
	
	<table class="table table-profile-info">
		{foreach from=$aUserFieldContactValues item=oField}
			<tr>
				<td class="cell-label"><i class="icon-contact icon-contact-{$oField->getName()}"></i> {$oField->getTitle()|escape:'html'}:</td>
				<td>{$oField->getValue(true,true)}</td>
			</tr>
		{/foreach}
	</table>
{/if}





{hook run='profile_whois_item' oUserProfile=$oUserProfile}


<h2 class="header-table">{$aLang.profile_activity}</h2>

<table class="table table-profile-info">

	{if $oConfig->GetValue('general.reg.invite') and $oUserInviteFrom}
		<tr>
			<td class="cell-label">{$aLang.profile_invite_from}:</td>
			<td>							       						
				<a href="{$oUserInviteFrom->getUserWebPath()}">{$oUserInviteFrom->getLogin()}</a>&nbsp;         					
			</td>
		</tr>
	{/if}
	
	
	{if $oConfig->GetValue('general.reg.invite') and $aUsersInvite}
		<tr>
			<td class="cell-label">{$aLang.profile_invite_to}:</td>
			<td>
				{foreach from=$aUsersInvite item=oUserInvite}        						
					<a href="{$oUserInvite->getUserWebPath()}">{$oUserInvite->getLogin()}</a>&nbsp; 
				{/foreach}
			</td>
		</tr>
	{/if}
	
	
	{if $aBlogsOwner}
		<tr>
			<td class="cell-label">{$aLang.profile_blogs_self}:</td>
			<td>							
				{foreach from=$aBlogsOwner item=oBlog name=blog_owner}
					<a href="{$oBlog->getUrlFull()}">{$oBlog->getTitle()|escape:'html'}</a>{if !$smarty.foreach.blog_owner.last}, {/if}								      		
				{/foreach}
			</td>
		</tr>
	{/if}
	
	
	{if $aBlogAdministrators}
		<tr>
			<td class="cell-label">{$aLang.profile_blogs_administration}:</td>
			<td>
				{foreach from=$aBlogAdministrators item=oBlogUser name=blog_user}
					{assign var="oBlog" value=$oBlogUser->getBlog()}
					<a href="{$oBlog->getUrlFull()}">{$oBlog->getTitle()|escape:'html'}</a>{if !$smarty.foreach.blog_user.last}, {/if}
				{/foreach}
			</td>
		</tr>
	{/if}
	
	
	{if $aBlogModerators}
		<tr>
			<td class="cell-label">{$aLang.profile_blogs_moderation}:</td>
			<td>
				{foreach from=$aBlogModerators item=oBlogUser name=blog_user}
					{assign var="oBlog" value=$oBlogUser->getBlog()}
					<a href="{$oBlog->getUrlFull()}">{$oBlog->getTitle()|escape:'html'}</a>{if !$smarty.foreach.blog_user.last}, {/if}
				{/foreach}
			</td>
		</tr>
	{/if}
	
	
	{if $aBlogUsers}
		<tr>
			<td class="cell-label">{$aLang.profile_blogs_join}:</td>
			<td>
				{foreach from=$aBlogUsers item=oBlogUser name=blog_user}
					{assign var="oBlog" value=$oBlogUser->getBlog()}
					<a href="{$oBlog->getUrlFull()}">{$oBlog->getTitle()|escape:'html'}</a>{if !$smarty.foreach.blog_user.last}, {/if}
				{/foreach}
			</td>
		</tr>
	{/if}

	
	{hook run='profile_whois_activity_item' oUserProfile=$oUserProfile}
	
	
	<tr>
		<td class="cell-label">{$aLang.profile_date_registration}:</td>
		<td>{date_format date=$oUserProfile->getDateRegister()}</td>
	</tr>	
	
	
	{if $oSession}				
		<tr>
			<td class="cell-label">{$aLang.profile_date_last}:</td>
			<td>{date_format date=$oSession->getDateLast()}</td>
		</tr>
	{/if}
</table>



{if $aUsersFriend}
	<h2 class="header-table"><a href="{$oUserProfile->getUserWebPath()}friends/">{$aLang.profile_friends}</a> ({$iCountFriendsUser})</h2>
	
	{include file='user_list.tpl' aUsersList=$aUsersFriend}
{/if}


{include file='footer.tpl'}