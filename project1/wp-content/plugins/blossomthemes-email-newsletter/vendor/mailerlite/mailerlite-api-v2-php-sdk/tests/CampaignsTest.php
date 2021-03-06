<?php

namespace MailerLiteApi\Tests;

use MailerLiteApi\MailerLite;

/**
 * Class CampaignsTest
 *
 * @package MailerLiteApi\Tests
 */
class CampaignsTest extends MlTestCase
{
    protected $campaignsApi;

    protected function setUp(): void
    {
        $this->campaignsApi = (new MailerLite(API_KEY))->campaigns();
    }

    /** @test **/
    public function create_campaign()
    {
        $campaignData = [
            'subject' => 'Regular Campaign Subject',
            'type' => 'regular',
            'groups' => [CAMPAIGNS_TEST_GROUP1, CAMPAIGNS_TEST_GROUP2] // TODO: improve this with creating new groups
        ];

        $campaign = $this->campaignsApi->create($campaignData);

        $this->assertTrue($campaign->campaign_type == $campaignData['type']);

        $this->campaignsApi->delete($campaign->id);
    }

    /** @test **/
    public function get_campaigns()
    {
        // see drafts
        $drafts = $this->campaignsApi->get('draft');

        $this->assertContainsValue($drafts, 'status', 'draft');
        $this->assertDoesNotContainValue($drafts, 'status', 'sent');
        $this->assertDoesNotContainValue($drafts, 'status', 'outbox');

        // see outbox
        $outbox = $this->campaignsApi->get('outbox');

        $this->assertContainsValue($outbox, 'status', 'outbox');
        $this->assertDoesNotContainValue($outbox, 'status', 'sent');
        $this->assertDoesNotContainValue($outbox, 'status', 'draft');

        // see sent
        $sent = $this->campaignsApi->get();

        $this->assertContainsValue($sent, 'status', 'sent');
        $this->assertDoesNotContainValue($sent, 'status', 'outbox');
        $this->assertDoesNotContainValue($sent, 'status', 'draft');
    }

}
