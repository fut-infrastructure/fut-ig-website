# Power of Attorney Privilege - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Power of Attorney Privilege**

## CodeSystem: Power of Attorney Privilege 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/poa-privilege | *Version*:10.0.2 |
| Active as of 2026-03-24 | *Computable Name*:PoAPrivilege |

 
Vendor-specific power of attorney privilege codes used by Keycloak when creating RelatedPerson resources for PoA-authenticated citizens. The full set of codes is externally governed and not enumerated here. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RelationshipTypes](ValueSet-relatedperson-relationshiptype.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-poa-privilege",
  "url" : "http://ehealth.sundhed.dk/cs/poa-privilege",
  "version" : "10.0.2",
  "name" : "PoAPrivilege",
  "title" : "Power of Attorney Privilege",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-03-24T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Vendor-specific power of attorney privilege codes used by Keycloak when creating RelatedPerson resources for PoA-authenticated citizens. The full set of codes is externally governed and not enumerated here.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "caseSensitive" : true,
  "content" : "not-present"
}

```
