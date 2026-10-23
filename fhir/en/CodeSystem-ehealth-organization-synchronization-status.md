# Organization Synchronization Status - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization Synchronization Status**

## CodeSystem: Organization Synchronization Status 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/organization-synchronization-status | *Version*:11.0.1 |
| Active as of 2019-06-24 | *Computable Name*:OrganizationSynchronizationStatus |

 
Organization synchronization status type 

This Code system is referenced in the definition of the following value sets:

* [Organization Synchronization Status](ValueSet-ehealth-organization-synchronization-status.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-organization-synchronization-status",
  "url" : "http://ehealth.sundhed.dk/cs/organization-synchronization-status",
  "version" : "11.0.1",
  "name" : "OrganizationSynchronizationStatus",
  "title" : "Organization Synchronization Status",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-06-24T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Organization synchronization status type",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [{
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
  }]
}

```
