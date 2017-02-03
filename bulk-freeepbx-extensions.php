<?php

/*
 * www.servitux.es
 */

$first = "100";
$last = "200";
$password = "writeyourownpassword";

echo 'action,extension,name,cid_masquerade,sipname,outboundcid,ringtimer,callwaiting,call_screen,pinless,password,noanswer_dest,noanswer_cid,busy_dest,busy_cid,chanunavail_dest,chanunavail_cid,emergency_cid,tech,hardware,devinfo_channel,devinfo_secret,devinfo_notransfer,devinfo_dtmfmode,devinfo_canreinvite,devinfo_context,devinfo_immediate,devinfo_signalling,devinfo_echocancel,devinfo_echocancelwhenbrdiged,devinfo_echotraining,devinfo_busydetect,devinfo_busycount,devinfo_callprogress,devinfo_host,devinfo_type,devinfo_nat,devinfo_port,devinfo_qualify,devinfo_callgroup,devinfo_pickupgroup,devinfo_disallow,devinfo_allow,devinfo_dial,devinfo_accountcode,devinfo_mailbox,devinfo_deny,devinfo_permit,devicetype,deviceid,deviceuser,description,dictenabled,dictformat,dictemail,langcode,vm,vmpwd,email,pager,attach,saycid,envelope,delete,options,vmcontext,vmx_state,vmx_unavail_enabled,vmx_busy_enabled,vmx_play_instructions,vmx_option_0_sytem_default,vmx_option_0_number,vmx_option_1_system_default,vmx_option_1_number,vmx_option_2_number,account,ddial,pre_ring,strategy,grptime,grplist,annmsg_id,ringing,grppre,dring,needsconf,remotealert_id,toolate_id,postdest,faxenabled,faxemail,cfringtimer,concurrency_limit,answermode,qnostate,devinfo_trustrpid,devinfo_sendrpid,devinfo_qualifyfreq,devinfo_transport,devinfo_encryption,devinfo_vmexten,cc_agent_policy,cc_monitor_policy,recording_in_external,recording_out_external,recording_in_internal,recording_out_internal,recording_ondemand,recording_priority,add_xactview,xactview_autoanswer,xactview_email,xactview_cell,jabber_host,jabber_domain,jabber_resource,jabber_port,jabber_username,jabber_password,xactview_createprofile,xactview_profilepassword,xmpp_user,xmpp_pass'."\n";

for($a=$first;$a<$last;$a++) {
	echo "edit,$a,$a,$a,,,0,enabled,0,disabled,,,,,,,,,sip,,,$password,,rfc2833,no,from-internal,,,,,,,,,dynamic,friend,yes,5060,yes,1,1,all,gsm&alaw&g729,SIP/$a,,$a@device,0.0.0.0/0.0.0.0,0.0.0.0/0.0.0.0,fixed,,$a,$a,disabled,ogg,,,disabled,,,,attach=no,saycid=no,envelope=no,delete=no,,,,,,checked,checked,,,,,,,,,,,,,,,,,,,,,0,0,disabled,usestate,yes,yes,60,\"udp,tcp,tls\",no,,generic,generic,always,always,always,always,enabled,10,0,0,,,,,,5222,,,0,,\n";

}
?>
