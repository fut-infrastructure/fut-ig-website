# Message Category - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Message Category**

## CodeSystem: Message Category 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/message-category | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:MessageCategory |

 
Message category types 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MessageCategory](ValueSet-message-category.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-message-category",
  "url" : "http://ehealth.sundhed.dk/cs/message-category",
  "version" : "6.0.0",
  "name" : "MessageCategory",
  "title" : "Message Category",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-29T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "Message category types",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "message",
      "display" : "Message",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Message"
        },
        {
          "language" : "da",
          "value" : "Besked"
        }
      ]
    },
    {
      "code" : "notification",
      "display" : "Notification",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Notification"
        },
        {
          "language" : "da",
          "value" : "Notifikation"
        }
      ]
    },
    {
      "code" : "advice",
      "display" : "Advice",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Advice"
        },
        {
          "language" : "da",
          "value" : "Advisering"
        }
      ]
    },
    {
      "code" : "note",
      "display" : "Note",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Note"
        },
        {
          "language" : "da",
          "value" : "Note"
        }
      ]
    }
  ]
}

```
