<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\EchoBot;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => true, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => '1nu2DrwDg1boY7bNjxSNaBu6xyyYYXsR544KfWdb6+p41oRmrRJQNtCHf46/7I1VVKOdd/9LXSghMi4vcTVLPJ0/UgWKEiaCBD00EbGLpcHUIVn95HgBnQco0suIZOmWPfSmXLLDPngda3zf8JS6cgdB04t89/1O/w1cDnyilFU=',
                    'channelSecret' => '319a3c28744a94dd5ee0b5127745d7cb',
                ],

                'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}
