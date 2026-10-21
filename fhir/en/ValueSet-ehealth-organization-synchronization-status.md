# Organization Synchronization Status - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization Synchronization Status**

## ValueSet: Organization Synchronization Status (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/organization-synchronization-status | *Version*:11.0.0 |
| Active as of 2019-06-24 | *Computable Name*:OrganizationSynchronizationStatus |

 
Value set used for indicating the organization synchronization status 

 **References** 

* [Organization Synchronization status](StructureDefinition-ehealth-organization-synchronizationStatus.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-organization-synchronization-status",
  "url" : "http://ehealth.sundhed.dk/vs/organization-synchronization-status",
  "version" : "11.0.0",
  "name" : "OrganizationSynchronizationStatus",
  "title" : "Organization Synchronization Status",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-06-24T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set used for indicating the organization synchronization status",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/organization-synchronization-status"
    }]
  }
}

```
