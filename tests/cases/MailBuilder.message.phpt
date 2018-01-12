<?php

namespace Tests;

/**
 * Test: MailBuilder [message]
 */

use Contributte\Mailing\IMailSender;
use Contributte\Mailing\MailBuilder;
use Mockery;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

test(function () {
	$sender = Mockery::mock(IMailSender::class);
	$builder = new MailBuilder($sender);
	$builder->setFrom('foo@bar.baz');

	Assert::equal(['foo@bar.baz' => NULL], $builder->getMessage()->getFrom());
});