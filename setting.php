<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "FOEEtX4oeGnLbqAMWXQuv+WFCtvBtYUC312zQNFH80BFUcMrjO2nJ5z4ZsAsuz0rwgNbfj+XypPfHuE76plAFmzVLnp8OZbCd0bMB9B5+Nb8MxOS+xLo1BllVRQnNu9mc/SMTOxbnCb2hN265hyj7QdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "d871e64a91f712542c6b1f1bf8bd6ab3";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
