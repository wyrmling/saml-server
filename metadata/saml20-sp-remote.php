<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example SimpleSAMLphp SAML 2.0 SP
 */
//$metadata['http://sitos-main/'] = [
//$metadata['dasweb'] = [
$metadata['http://sitos-main/webapp/saml/metadata/'] = [
    'AssertionConsumerService' => 'http://sitos-main/webapp/saml/acs/',
    'SingleLogoutService' => 'http://sitos-main/webapp/saml/sls/',

    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
    'simplesaml.nameidattribute' => 'uid',
//    'simplesaml.attributes' => false,
    'simplesaml.attributes' => true,
];

$metadata['http://sitos-randstad/webapp/saml/metadata/1/'] = [
    'AssertionConsumerService' => 'http://sitos-randstad/webapp/saml/acs/1',
    'SingleLogoutService' => 'http://sitos-randstad/webapp/saml/sls/1',

    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
    'simplesaml.nameidattribute' => 'uid',
//    'simplesaml.attributes' => false,
    'simplesaml.attributes' => true,
];

/*
 * This example shows an example config that works with Google Apps for education.
 * What is important is that you have an attribute in your IdP that maps to the local part of the email address
 * at Google Apps. In example, if your google account is foo.com, and you have a user that has an email john@foo.com, then you
 * must set the simplesaml.nameidattribute to be the name of an attribute that for this user has the value of 'john'.
 */
$metadata['google.com'] = [
    'AssertionConsumerService' => 'https://www.google.com/a/g.feide.no/acs',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'simplesaml.nameidattribute' => 'uid',
    'simplesaml.attributes' => FALSE,
];

$metadata['https://preview.e-learning.cc/dev-psql6/webapp/saml/metadata/'] = [
    'AssertionConsumerService' => 'https://preview.e-learning.cc/dev-psql6/webapp/saml/acs/',
    'SingleLogoutService' => 'https://preview.e-learning.cc/dev-psql6/webapp/saml/sls/',

    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
    'simplesaml.nameidattribute' => 'uid',
    'simplesaml.attributes' => true,
];

$metadata['https://preview.e-learning.cc/dev-ora6/webapp/saml/metadata/'] = [
    'AssertionConsumerService' => 'https://preview.e-learning.cc/dev-ora6/webapp/saml/acs/',
    'SingleLogoutService' => 'https://preview.e-learning.cc/dev-ora6/webapp/saml/sls/',

    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
    'simplesaml.nameidattribute' => 'uid',
    'simplesaml.attributes' => true,
];

$metadata['https://www.test.randstad-elearning.de/webapp/saml/metadata/'] = [
    'AssertionConsumerService' => 'https://www.test.randstad-elearning.de/webapp/saml/acs/',
    'SingleLogoutService' => 'https://www.test.randstad-elearning.de/webapp/saml/sls/',

    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
    'simplesaml.nameidattribute' => 'uid',
    'simplesaml.attributes' => true,
];