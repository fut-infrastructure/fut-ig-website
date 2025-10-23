# Organization/8564 - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization/8564**

## Example Organization: Organization/8564

version: 2; Last updated: 2021-10-14 07:58:31+0000

Profile: [ehealth-organization](StructureDefinition-ehealth-organization.md)

**Organization Source**: Manual

**Organization Synchronization status**: Not synchronized

**identifier**: `urn:oid:2.16.840.1.113883.2.24.1.1`/22222222 (use: official, period: 2021-10-14 07:58:28+0000 --> (ongoing))

**name**: Organization02

### Contacts

| | | |
| :--- | :--- | :--- |
| - | **Name** | **Telecom** |
| * |  | -unknown- |



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "8564",
  "meta" : {
    "versionId" : "2",
    "lastUpdated" : "2021-10-14T07:58:31.119+00:00",
    "profile" : [
      "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"
    ]
  },
  "extension" : [
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-source",
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://ehealth.sundhed.dk/cs/organization-source",
            "code" : "manual"
          }
        ]
      }
    },
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-synchronizationStatus",
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://ehealth.sundhed.dk/cs/organization-synchronization-status",
            "code" : "NotSynchronized"
          }
        ]
      }
    }
  ],
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:oid:2.16.840.1.113883.2.24.1.1",
      "value" : "22222222",
      "period" : {
        "start" : "2021-10-14T07:58:28+00:00"
      }
    }
  ],
  "name" : "Organization02",
  "contact" : [
    {
      "name" : {
        "period" : {
          "end" : "2021-01-01"
        }
      },
      "telecom" : [
        {
          "extension" : [
            {
              "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-telecomCustodian",
              "valueCodeableConcept" : {
                "coding" : [
                  {
                    "system" : "http://ehealth.sundhed.dk/cs/contactpoint-custodian",
                    "code" : "SOR"
                  }
                ]
              }
            },
            {
              "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-telecomSystem",
              "valueCodeableConcept" : {
                "coding" : [
                  {
                    "system" : "http://ehealth.sundhed.dk/cs/contactpoint-system",
                    "code" : "TBD"
                  }
                ]
              }
            },
            {
              "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-telecomValue",
              "valueString" : "5513495a-ed1b-43a9-b890-c2a09762c584"
            }
          ]
        }
      ]
    }
  ]
}

```
