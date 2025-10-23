# Fetch practitioner GDPR - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fetch practitioner GDPR**

## OperationDefinition: Fetch practitioner GDPR 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-fetch-practitioner-gdpr | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:fetch-practitioner-gdpr |

 

### Report Contents

 
This report contains all information related to the specified Practitioner 
* Practitioner
* CareTeam
* None. The report is returned in a single JSon file.
* organization: 
* Practitioner: Not filtered
* CareTeam: Filter on CareTeam.ManagingOrganization match
* PractitionerRole: Filter on PractitionerRole.Organization match
 
* period: not used
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details


  { 'EHealthPractitioner': { 'resourceType': 'Practitioner', 'id': '20599', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner'] }, 'name': [{ 'family': '2f82a48c-61cc-4c7f-855a-3e6b59729ef1' } ] }, 'EHealthPractitionerRole': [], 'EHealthCareTeam': [{ 'resourceType': 'CareTeam', 'id': '99438', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam'] }, 'identifier': [{ 'id': 'f556eab1-dbe9-40e3-9edd-149fa3bd1ae0', 'system': 'urn:ietf:rfc:3986' } ], 'status': 'active', 'name': 'f9d27974-6a6a-44fb-b6eb-bcd22d769a18', 'participant': [{ 'member': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Practitioner/20599' } } ], 'reasonCode': [{ 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/conditions', 'code': 'TBD' } ] } ], 'managingOrganization': [{ 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/94174' } ] } ] }
 

URL: [base]/$fetch-practitioner-gdpr

### Parameters

* **Use**: IN
  * **Name**: anonymization
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [string](http://hl7.org/fhir/R4/datatypes.html#string)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: organization
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: period
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Period](http://hl7.org/fhir/R4/datatypes.html#Period)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: practitioner
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: 
* **Use**: OUT
  * **Name**: return
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Binary](http://hl7.org/fhir/R4/binary.html)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-fetch-practitioner-gdpr",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-fetch-practitioner-gdpr",
  "version" : "6.0.0",
  "name" : "fetch-practitioner-gdpr",
  "title" : "Fetch practitioner GDPR",
  "status" : "active",
  "kind" : "operation",
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
  "description" : "### Report Contents\nThis report contains all information related to the specified Practitioner\n- Practitioner\n- CareTeam\n- PractitionerRole\n### Grouping \nNone. The report is returned in a single JSon file.\n### Parameters\n- organization: \n    - Practitioner: Not filtered\n    - CareTeam: Filter on CareTeam.ManagingOrganization match\n    - PractitionerRole: Filter on PractitionerRole.Organization match\n- period: not used\n- practitionerID: The practitioner to fetch information for\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'EHealthPractitioner': {\n            'resourceType': 'Practitioner',\n            'id': '20599',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner']\n            },\n            'name': [{\n                    'family': '2f82a48c-61cc-4c7f-855a-3e6b59729ef1'\n                }\n            ]\n        },\n        'EHealthPractitionerRole': [],\n        'EHealthCareTeam': [{\n                'resourceType': 'CareTeam',\n                'id': '99438',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                },\n                'identifier': [{\n                        'id': 'f556eab1-dbe9-40e3-9edd-149fa3bd1ae0',\n                        'system': 'urn:ietf:rfc:3986'\n                    }\n                ],\n                'status': 'active',\n                'name': 'f9d27974-6a6a-44fb-b6eb-bcd22d769a18',\n                'participant': [{\n                        'member': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Practitioner/20599'\n                        }\n                    }\n                ],\n                'reasonCode': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'managingOrganization': [{\n                        'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/94174'\n                    }\n                ]\n            }\n        ]\n    }\n",
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
  "affectsState" : true,
  "code" : "fetch-practitioner-gdpr",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [
    {
      "name" : "anonymization",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "type" : "string"
    },
    {
      "name" : "organization",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "Reference"
    },
    {
      "name" : "period",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "Period"
    },
    {
      "name" : "practitioner",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "type" : "Reference"
    },
    {
      "name" : "return",
      "use" : "out",
      "min" : 0,
      "max" : "1",
      "type" : "Binary"
    }
  ]
}

```
