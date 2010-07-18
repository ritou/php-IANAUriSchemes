<?php

class IANAUriSchemes{

  const PERMANENT = "permanent";
  const PROVISIONAL = "provisional";
  const HISTORICAL = "historical";
  const CUSTOM = "custom";

  static function getSchemeTypeFromUrl( $url ){
    $validScheme = preg_match("/^(\w[\w\.-]*)[:|\/]/", $url, $scheme );
    if( $validScheme ){
      return self::getSchemeType( $scheme[1] );
    }
    return NULL;
  }

  static function getSchemeType( $scheme ){

    $PERMANENT_URI_SCHEMES = array ( 
    "aaa",
    "aaas",
    "acap",
    "cap",
    "cid",
    "crid",
    "data",
    "dav",
    "dict",
    "dns",
    "fax",
    "file",
    "ftp",
    "geo",
    "go",
    "gopher",
    "h323",
    "http",
    "https",
    "iax",
    "icap",
    "im",
    "imap",
    "info",
    "ipp",
    "iris",
    "iris.beep",
    "iris.xpc",
    "iris.xpcs",
    "iris.lwz",
    "ldap",
    "mailto",
    "mid",
    "modem",
    "msrp",
    "msrps",
    "mtqp",
    "mupdate",
    "news",
    "nfs",
    "nntp",
    "opaquelocktoken",
    "pop",
    "pres",
    "rtsp",
    "service",
    "shttp",
    "sieve",
    "sip",
    "sips",
    "sms",
    "snmp",
    "soap.beep",
    "soap.beeps",
    "tag",
    "tel",
    "telnet",
    "tftp",
    "thismessage",
    "tip",
    "tv",
    "urn",
    "vemmi",
    "xmlrpc.beep",
    "xmlrpc.beeps",
    "xmpp",
    "z39.50r",
    "z39.50s"
    );

    $PROVISIONAL_URI_SCHEMES = array ( 
    "afs",
    "dtn",
    "icon",
    "mailserver",
    "oid",
    "pack",
    "rsync",
    "tn3270",
    "ws",
    "wss"
    );

    $HISTORICAL_URI_SCHEMES = array ( 
    "prospero",
    "snews",
    "videotex",
    "wais"
    );

    if( in_array( $scheme, $PERMANENT_URI_SCHEMES ) ){
      return PERMANENT;
    }

    if( in_array( $scheme, $PROVISIONAL_URI_SCHEMES ) ){
      return PROVISIONAL;
    }

    if( in_array( $scheme, $HISTORICAL_URI_SCHEMES ) ){
      return HISTORICAL;
    }
    return CUSTOM;
  }
}
