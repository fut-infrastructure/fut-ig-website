# Organization Synchronization Status - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization Synchronization Status**

## CodeSystem: Organization Synchronization Status 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/organization-synchronization-status | *Version*:6.0.0 |
| Active as of 2019-06-24 | *Computable Name*:OrganizationSynchronizationStatus |

 
Organization synchronization status type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [OrganizationSynchronizationStatus](ValueSet-ehealth-organization-synchronization-status.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-organization-synchronization-status",
  "url" : "http://ehealth.sundhed.dk/cs/organization-synchronization-status",
  "version" : "6.0.0",
  "name" : "OrganizationSynchronizationStatus",
  "title" : "Organization Synchronization Status",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-06-24T00:00:00+00:00",
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
  "description" : "Organization synchronization status type",
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
      "code" : "NotSynchronized",
      "display" : "Not synchronized",
      "definition" : "Not synchronized"
    },
    {
      "code" : "EligibleForSynchronization",
      "display" : "Eligible for synchronization",
      "definition" : "Eligible for automatic synchronization with the source"
    },
    {
      "code" : "NoLongerSynchronized",
      "display" : "No longer synchronized",
      "definition" : "No longer eligible for automatic synchronization with the source"
    }
  ]
}

```
