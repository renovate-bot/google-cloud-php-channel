<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/customers.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Entity representing a customer of a reseller or distributor.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.Customer</code>
 */
class Customer extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the customer.
     * Format: accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. Name of the organization that the customer entity represents.
     *
     * Generated from protobuf field <code>string org_display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $org_display_name = '';
    /**
     * Required. Address of the organization of the customer entity.
     * Region and zip codes are required to enforce US laws and embargoes.
     * Valid address lines are required for all customers.
     * Language code is discarded. Use the Customer-level language code to set the
     * customer's language.
     *
     * Generated from protobuf field <code>.google.type.PostalAddress org_postal_address = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $org_postal_address = null;
    /**
     * Primary contact info.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ContactInfo primary_contact_info = 4;</code>
     */
    private $primary_contact_info = null;
    /**
     * Secondary contact email.
     * Alternate email and primary contact email are required to have different
     * domains if primary contact email is present.
     * When creating admin.google.com accounts, users get notified credentials at
     * this email. This email address is also used as a recovery email.
     *
     * Generated from protobuf field <code>string alternate_email = 5;</code>
     */
    private $alternate_email = '';
    /**
     * Required. Primary domain used by the customer.
     * Domain of primary contact email is required to be same as the provided
     * domain.
     *
     * Generated from protobuf field <code>string domain = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $domain = '';
    /**
     * Output only. The time at which the customer is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time at which the customer is updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Output only. Customer's cloud_identity_id.
     * Populated only if a Cloud Identity resource exists for this customer.
     *
     * Generated from protobuf field <code>string cloud_identity_id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $cloud_identity_id = '';
    /**
     * Optional. The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     * information, see
     * https://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $language_code = '';
    /**
     * Output only. Cloud Identity information for the customer.
     * Populated only if a Cloud Identity account exists for this customer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CloudIdentityInfo cloud_identity_info = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $cloud_identity_info = null;
    /**
     * Cloud Identity ID of the customer's channel partner.
     * Populated only if a channel partner exists for this customer.
     *
     * Generated from protobuf field <code>string channel_partner_id = 13;</code>
     */
    private $channel_partner_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of the customer.
     *           Format: accounts/{account_id}/customers/{customer_id}
     *     @type string $org_display_name
     *           Required. Name of the organization that the customer entity represents.
     *     @type \Google\Type\PostalAddress $org_postal_address
     *           Required. Address of the organization of the customer entity.
     *           Region and zip codes are required to enforce US laws and embargoes.
     *           Valid address lines are required for all customers.
     *           Language code is discarded. Use the Customer-level language code to set the
     *           customer's language.
     *     @type \Google\Cloud\Channel\V1\ContactInfo $primary_contact_info
     *           Primary contact info.
     *     @type string $alternate_email
     *           Secondary contact email.
     *           Alternate email and primary contact email are required to have different
     *           domains if primary contact email is present.
     *           When creating admin.google.com accounts, users get notified credentials at
     *           this email. This email address is also used as a recovery email.
     *     @type string $domain
     *           Required. Primary domain used by the customer.
     *           Domain of primary contact email is required to be same as the provided
     *           domain.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which the customer is created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time at which the customer is updated.
     *     @type string $cloud_identity_id
     *           Output only. Customer's cloud_identity_id.
     *           Populated only if a Cloud Identity resource exists for this customer.
     *     @type string $language_code
     *           Optional. The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     *           information, see
     *           https://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *     @type \Google\Cloud\Channel\V1\CloudIdentityInfo $cloud_identity_info
     *           Output only. Cloud Identity information for the customer.
     *           Populated only if a Cloud Identity account exists for this customer.
     *     @type string $channel_partner_id
     *           Cloud Identity ID of the customer's channel partner.
     *           Populated only if a channel partner exists for this customer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Customers::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of the customer.
     * Format: accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the customer.
     * Format: accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. Name of the organization that the customer entity represents.
     *
     * Generated from protobuf field <code>string org_display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getOrgDisplayName()
    {
        return $this->org_display_name;
    }

    /**
     * Required. Name of the organization that the customer entity represents.
     *
     * Generated from protobuf field <code>string org_display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setOrgDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->org_display_name = $var;

        return $this;
    }

    /**
     * Required. Address of the organization of the customer entity.
     * Region and zip codes are required to enforce US laws and embargoes.
     * Valid address lines are required for all customers.
     * Language code is discarded. Use the Customer-level language code to set the
     * customer's language.
     *
     * Generated from protobuf field <code>.google.type.PostalAddress org_postal_address = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Type\PostalAddress|null
     */
    public function getOrgPostalAddress()
    {
        return isset($this->org_postal_address) ? $this->org_postal_address : null;
    }

    public function hasOrgPostalAddress()
    {
        return isset($this->org_postal_address);
    }

    public function clearOrgPostalAddress()
    {
        unset($this->org_postal_address);
    }

    /**
     * Required. Address of the organization of the customer entity.
     * Region and zip codes are required to enforce US laws and embargoes.
     * Valid address lines are required for all customers.
     * Language code is discarded. Use the Customer-level language code to set the
     * customer's language.
     *
     * Generated from protobuf field <code>.google.type.PostalAddress org_postal_address = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Type\PostalAddress $var
     * @return $this
     */
    public function setOrgPostalAddress($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\PostalAddress::class);
        $this->org_postal_address = $var;

        return $this;
    }

    /**
     * Primary contact info.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ContactInfo primary_contact_info = 4;</code>
     * @return \Google\Cloud\Channel\V1\ContactInfo|null
     */
    public function getPrimaryContactInfo()
    {
        return isset($this->primary_contact_info) ? $this->primary_contact_info : null;
    }

    public function hasPrimaryContactInfo()
    {
        return isset($this->primary_contact_info);
    }

    public function clearPrimaryContactInfo()
    {
        unset($this->primary_contact_info);
    }

    /**
     * Primary contact info.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ContactInfo primary_contact_info = 4;</code>
     * @param \Google\Cloud\Channel\V1\ContactInfo $var
     * @return $this
     */
    public function setPrimaryContactInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\ContactInfo::class);
        $this->primary_contact_info = $var;

        return $this;
    }

    /**
     * Secondary contact email.
     * Alternate email and primary contact email are required to have different
     * domains if primary contact email is present.
     * When creating admin.google.com accounts, users get notified credentials at
     * this email. This email address is also used as a recovery email.
     *
     * Generated from protobuf field <code>string alternate_email = 5;</code>
     * @return string
     */
    public function getAlternateEmail()
    {
        return $this->alternate_email;
    }

    /**
     * Secondary contact email.
     * Alternate email and primary contact email are required to have different
     * domains if primary contact email is present.
     * When creating admin.google.com accounts, users get notified credentials at
     * this email. This email address is also used as a recovery email.
     *
     * Generated from protobuf field <code>string alternate_email = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAlternateEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->alternate_email = $var;

        return $this;
    }

    /**
     * Required. Primary domain used by the customer.
     * Domain of primary contact email is required to be same as the provided
     * domain.
     *
     * Generated from protobuf field <code>string domain = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Required. Primary domain used by the customer.
     * Domain of primary contact email is required to be same as the provided
     * domain.
     *
     * Generated from protobuf field <code>string domain = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

    /**
     * Output only. The time at which the customer is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which the customer is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time at which the customer is updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return isset($this->update_time) ? $this->update_time : null;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time at which the customer is updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. Customer's cloud_identity_id.
     * Populated only if a Cloud Identity resource exists for this customer.
     *
     * Generated from protobuf field <code>string cloud_identity_id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCloudIdentityId()
    {
        return $this->cloud_identity_id;
    }

    /**
     * Output only. Customer's cloud_identity_id.
     * Populated only if a Cloud Identity resource exists for this customer.
     *
     * Generated from protobuf field <code>string cloud_identity_id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCloudIdentityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cloud_identity_id = $var;

        return $this;
    }

    /**
     * Optional. The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     * information, see
     * https://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     * information, see
     * https://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Output only. Cloud Identity information for the customer.
     * Populated only if a Cloud Identity account exists for this customer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CloudIdentityInfo cloud_identity_info = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Channel\V1\CloudIdentityInfo|null
     */
    public function getCloudIdentityInfo()
    {
        return isset($this->cloud_identity_info) ? $this->cloud_identity_info : null;
    }

    public function hasCloudIdentityInfo()
    {
        return isset($this->cloud_identity_info);
    }

    public function clearCloudIdentityInfo()
    {
        unset($this->cloud_identity_info);
    }

    /**
     * Output only. Cloud Identity information for the customer.
     * Populated only if a Cloud Identity account exists for this customer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CloudIdentityInfo cloud_identity_info = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Channel\V1\CloudIdentityInfo $var
     * @return $this
     */
    public function setCloudIdentityInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\CloudIdentityInfo::class);
        $this->cloud_identity_info = $var;

        return $this;
    }

    /**
     * Cloud Identity ID of the customer's channel partner.
     * Populated only if a channel partner exists for this customer.
     *
     * Generated from protobuf field <code>string channel_partner_id = 13;</code>
     * @return string
     */
    public function getChannelPartnerId()
    {
        return $this->channel_partner_id;
    }

    /**
     * Cloud Identity ID of the customer's channel partner.
     * Populated only if a channel partner exists for this customer.
     *
     * Generated from protobuf field <code>string channel_partner_id = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setChannelPartnerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel_partner_id = $var;

        return $this;
    }

}

