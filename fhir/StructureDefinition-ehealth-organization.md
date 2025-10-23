# ehealth-organization - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-organization**

## Resource Profile: ehealth-organization 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-organization |

# Introduction

An Organizations is a formally or informally recognized grouping of people or organizations formed for the purpose of achieving some form of collective action. Includes companies, institutions, corporations, departments, community groups, healthcare practice groups, etc.

# Scope and Usage

In scope of the eHealth infrastructure Organizations are limited to represent organizations in the Danish healthcare system as defined by the national health organization registry, SOR, and the joint municipalities IT community (KOMBIT) Support System Organisation, STS-ORG.

From these sources Organizations are automatically imported into the eHealth infrastructure. It is not the intention that users of the infrastructure should create any other Organization resources.

For SSL supplier organizations not maintained by the SOR or STS-ORG registries, it is possible to manually create and maintain these organizations.

### Identifiers

Organizations are imported into the eHealth infrastructure from SOR and STS-ORG. This means that organisations can have different identifiers depending on the source system. For some organisations (for instance SSL suppliers), organizations can use an SSL Identifier as identifier.

Identifier Systems:

* SOR-ID: "urn:oid:1.2.208.176.1.1"
* KOMBIT STS-ORG-ID: "https://www.kombit.dk/sts/organisation"
* SSL Identifier: "http://ehealth.sundhed.dk/organization/ssl"

Organizations created manually are not allowed to have identifiers of types SOR-ID or KOMBIT STS-ORG-ID.

### Source

The origin of an Organization is maintained in the extension `organization-source` which currently has the following concepts:

* `SOR` for an organisation imported from SOR
* `STS-ORG` for an organisation imported from STS-ORG
* `manual` for a manually created organisation

### Import and merge

SOR supplies a list of updates each night. These updates will be merged into the existing organisation resources in the database.

STS-ORG provides a number of webservices where the newest organisation data can be fetched.

Contact information can be edited/added both in the integration platform and in the source systems. To ensure that no information is lost during merge, each ContactPoint will be tagged with a `custodian` element marking which system currently maintains it. When merging information from a given source, the ContactPoint elements with a different `custodian` will not be affected.

### Relations to other organizations

It is possible to relate Organization resources to other Organization resources using the extension element `relatedTo`.

The intention with this element is to relate Organizations to other Organizations imported from another source. For instance to relate Organizations imported from SOR to similar Organizations imported from STS-ORG.

Hierarchical relations between Organizations imported from the same source are expressed using the `partOf` element.

### Semantics of a relation between organizations

Relations between Organizations which are expressed using the extension element `relatedTo` have uni-directional semantics.

As an example this implies at that if two representations of the exact same Organization are imported from two different sources, then both could have a `relatedTo` element with the other Organization as target, and a relation type of e.g. "sameAs".

**Usages:**

* Refer to this Profile: [ehealth-careplan](StructureDefinition-ehealth-careplan.md), [ehealth-careteam](StructureDefinition-ehealth-careteam.md), [assessor-Organization](StructureDefinition-ehealth-clinicalimpression-assessor-organization.md), [Author organization](StructureDefinition-ehealth-composition-authorOrganization.md)...Show 22 more,[ehealth-composition](StructureDefinition-ehealth-composition.md),[ehealth-consent](StructureDefinition-ehealth-consent.md),[Suppliers](StructureDefinition-ehealth-device-suppliers.md),[ehealth-device](StructureDefinition-ehealth-device.md),[ehealth-documentreference](StructureDefinition-ehealth-documentreference.md),[Caremanager organization](StructureDefinition-ehealth-episodeofcare-caremanagerOrganization.md),[ehealth-episodeofcare](StructureDefinition-ehealth-episodeofcare.md),[Intended audience](StructureDefinition-ehealth-intendedAudience.md),[Intended organization](StructureDefinition-ehealth-intendedOrganization.md),[Modified role](StructureDefinition-ehealth-modifier-role.md),[ehealth-observation](StructureDefinition-ehealth-observation.md),[Related to](StructureDefinition-ehealth-organization-relatedTo.md),[ehealth-organization](StructureDefinition-ehealth-organization.md),[Performing organization](StructureDefinition-ehealth-performing-organization.md),[ehealth-practitioner](StructureDefinition-ehealth-practitioner.md),[ehealth-practitionerrole](StructureDefinition-ehealth-practitionerrole.md),[ehealth-provenance](StructureDefinition-ehealth-provenance.md),[Questionnaire intended organization](StructureDefinition-ehealth-questionnaire-intendedOrganization.md),[Responsible organization](StructureDefinition-ehealth-responsible-organization.md),[ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md),[ehealth-task](StructureDefinition-ehealth-task.md)and[ehealth-transformation-documentreference](StructureDefinition-ehealth-transformation-documentreference.md)
* Examples for this Profile: [63785662-18ad-4896-b960-505e94bdc5c4](Organization-108752.md) and [Organization02](Organization-8564.md)
* CapabilityStatements using this Profile: [organization](CapabilityStatement-organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-organization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-organization.csv), [Excel](StructureDefinition-ehealth-organization.xlsx), [Schematron](StructureDefinition-ehealth-organization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-organization",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization",
  "version" : "6.0.0",
  "name" : "ehealth-organization",
  "status" : "active",
  "date" : "2025-10-23T10:34:08+00:00",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Organization",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Organization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Organization",
        "path" : "Organization"
      },
      {
        "id" : "Organization.extension",
        "path" : "Organization.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 2
      },
      {
        "id" : "Organization.extension:cvrNumber",
        "path" : "Organization.extension",
        "sliceName" : "cvrNumber",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-cvrNumber"
            ]
          }
        ]
      },
      {
        "id" : "Organization.extension:regionCode",
        "path" : "Organization.extension",
        "sliceName" : "regionCode",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-regionCode"
            ]
          }
        ]
      },
      {
        "id" : "Organization.extension:municipalityCode",
        "path" : "Organization.extension",
        "sliceName" : "municipalityCode",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-municipalityCode"
            ]
          }
        ]
      },
      {
        "id" : "Organization.extension:source",
        "path" : "Organization.extension",
        "sliceName" : "source",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-source"
            ]
          }
        ]
      },
      {
        "id" : "Organization.extension:synchronizationStatus",
        "path" : "Organization.extension",
        "sliceName" : "synchronizationStatus",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-synchronizationStatus"
            ]
          }
        ]
      },
      {
        "id" : "Organization.extension:providerIdentifier",
        "path" : "Organization.extension",
        "sliceName" : "providerIdentifier",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-providerIdentifier"
            ]
          }
        ]
      },
      {
        "id" : "Organization.extension:specialty",
        "path" : "Organization.extension",
        "sliceName" : "specialty",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-specialty"
            ]
          }
        ]
      },
      {
        "id" : "Organization.extension:relatedTo",
        "path" : "Organization.extension",
        "sliceName" : "relatedTo",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-relatedTo"
            ]
          }
        ]
      },
      {
        "id" : "Organization.identifier",
        "path" : "Organization.identifier",
        "min" : 1
      },
      {
        "id" : "Organization.type",
        "path" : "Organization.type",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/organization-type"
        }
      },
      {
        "id" : "Organization.name",
        "path" : "Organization.name",
        "min" : 1
      },
      {
        "id" : "Organization.telecom.value",
        "path" : "Organization.telecom.value",
        "min" : 1
      },
      {
        "id" : "Organization.partOf",
        "path" : "Organization.partOf",
        "type" : [
          {
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-hierarchy",
                "valueBoolean" : true
              }
            ],
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Organization.contact.telecom.extension",
        "path" : "Organization.contact.telecom.extension",
        "min" : 3
      },
      {
        "id" : "Organization.contact.telecom.extension:telecomValue",
        "path" : "Organization.contact.telecom.extension",
        "sliceName" : "telecomValue",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-telecomValue"
            ]
          }
        ]
      },
      {
        "id" : "Organization.contact.telecom.extension:telecomSystem",
        "path" : "Organization.contact.telecom.extension",
        "sliceName" : "telecomSystem",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-telecomSystem"
            ]
          }
        ]
      },
      {
        "id" : "Organization.contact.telecom.extension:telecomCustodian",
        "path" : "Organization.contact.telecom.extension",
        "sliceName" : "telecomCustodian",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-telecomCustodian"
            ]
          }
        ]
      },
      {
        "id" : "Organization.contact.telecom.system",
        "path" : "Organization.contact.telecom.system",
        "max" : "0"
      },
      {
        "id" : "Organization.contact.telecom.value",
        "path" : "Organization.contact.telecom.value",
        "max" : "0"
      }
    ]
  }
}

```
