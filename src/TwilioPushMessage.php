<?php

namespace NotificationChannels\Twilio;

class TwilioPushMessage extends TwilioMessage
{
    public const PRIORITY_LOW = 'low';
    public const PRIORITY_HIGH = 'high';
    public const PRIORITY_NORMAL = 'normal';

    private const TAG_APN = 'apn';
    private const TAG_FCM = 'fcm';
    private const TAG_GCM = 'gcm';
    private const TAG_SMS = 'sms';
    private const TAG_FBM = 'facebook-messenger';
    private const TAG_ALL = 'all';

    private string $identity;

    private ?string $tag = null;

    private ?string $body = null;

    private ?string $priority = null;

    private ?int $ttl = null;

    private ?string $title = null;

    private ?string $sound = null;

    private ?string $action = null;

    private ?array $data = null;

    private ?array $apn = null;

    private ?array $gcm = null;

    private ?array $sms = null;

    private ?array $facebookMessenger = null;

    private ?array $fcm = null;

    private ?array $toBinding = null;

    private ?string $deliveryCallbackUrl = null;

    /**
     * @param string $identity
     * @return TwilioPushMessage
     */
    public function setIdentity(string $identity): self
    {
        $this->identity = $identity;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentity(): string
    {
        return $this->identity;
    }

    /**
     * @param string|null $tag
     * @return TwilioPushMessage
     */
    public function setTag(?string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * @param string|null $body
     * @return TwilioPushMessage
     */
    public function setBody(?string $body): self
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * @param string|null $priority
     * @return TwilioPushMessage
     */
    public function setPriority(?string $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPriority(): ?string
    {
        return $this->priority;
    }

    /**
     * @param int|null $ttl
     * @return TwilioPushMessage
     */
    public function setTtl(?int $ttl): self
    {
        $this->ttl = $ttl;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTtl(): ?int
    {
        return $this->ttl;
    }

    /**
     * @param string|null $title
     * @return TwilioPushMessage
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $sound
     * @return TwilioPushMessage
     */
    public function setSound(?string $sound): self
    {
        $this->sound = $sound;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSound(): ?string
    {
        return $this->sound;
    }

    /**
     * @param string|null $action
     * @return TwilioPushMessage
     */
    public function setAction(?string $action): self
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    /**
     * @param array|null $data
     * @return TwilioPushMessage
     */
    public function setData(?array $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param array|null $apn
     * @return TwilioPushMessage
     */
    public function setApn(?array $apn): self
    {
        $this->apn = $apn;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getApn(): ?array
    {
        return $this->apn;
    }

    /**
     * @param array|null $gcm
     * @return TwilioPushMessage
     */
    public function setGcm(?array $gcm): self
    {
        $this->gcm = $gcm;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getGcm(): ?array
    {
        return $this->gcm;
    }

    /**
     * @param array|null $sms
     * @return TwilioPushMessage
     */
    public function setSms(?array $sms): self
    {
        $this->sms = $sms;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getSms(): ?array
    {
        return $this->sms;
    }

    /**
     * @param array|null $facebookMessenger
     * @return TwilioPushMessage
     */
    public function setFacebookMessenger(?array $facebookMessenger): self
    {
        $this->facebookMessenger = $facebookMessenger;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getFacebookMessenger(): ?array
    {
        return $this->facebookMessenger;
    }

    /**
     * @param array|null $fcm
     * @return TwilioPushMessage
     */
    public function setFcm(?array $fcm): self
    {
        $this->fcm = $fcm;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getFcm(): ?array
    {
        return $this->fcm;
    }

    /**
     * @param array|null $toBinding
     * @return TwilioPushMessage
     */
    public function setToBinding(?array $toBinding): self
    {
        $this->toBinding = $toBinding;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getToBinding(): ?array
    {
        return $this->toBinding;
    }

    /**
     * @param string|null $deliveryCallbackUrl
     * @return TwilioPushMessage
     */
    public function setDeliveryCallbackUrl(?string $deliveryCallbackUrl): self
    {
        $this->deliveryCallbackUrl = $deliveryCallbackUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryCallbackUrl(): ?string
    {
        return $this->deliveryCallbackUrl;
    }
}
