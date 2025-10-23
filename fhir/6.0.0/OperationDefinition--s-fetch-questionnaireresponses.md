# Fetch questionnare responses - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fetch questionnare responses**

## OperationDefinition: Fetch questionnare responses 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-fetch-questionnaireresponses | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:fetch-questionnaireresponses |

 

### Report Contents

 
This report contains a collection of questionnaire responses and related resources 
* Organizations
* CareTeams
* PlanDefinitions
* ActivityDefinitions
* Questionnaires
* QuestionnaireResponses
* Communication
* This report is grouped by Questionnaire. Each group is returned as a FHIR bundle in a separate JSon file.
* organization: Filter on EpisodeOfCare.managingOrganization match
* condition: Filter on CarePlan.addresses.code match
* period: Filter on QuestionnaireResponse.authored within period
* plan: Filter on Plan match
* questionnaire: Filter on ActivityDefinition.composed-of match
* careteam: Filter on careteam in CarePlan.careteam or EpisodeOfCare.team
* tag: Filter on tag match
 

### Output

 
Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups. 

### Example output

 

### Output

 
{ 'resourceType' : 'Bundle', 'id' : 'Questionnaire/44529', 'entry' : [ { 'fullUrl' : 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/24206/_history/1', 'resource' : { 'resourceType' : 'PlanDefinition', 'id' : '24206', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition' ] }, 'extension' : [ { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role', 'extension' : [ { 'url' : 'reference', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/14291' } }, { 'url' : 'role', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/modifier-role', 'code' : 'owner' } ] } } ] } ], 'version' : '1.0', 'status' : 'active', 'action' : [ { 'definitionCanonical' : 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/10919' } ] } }, { 'fullUrl' : 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/10919/_history/1', 'resource' : { 'resourceType' : 'ActivityDefinition', 'id' : '10919', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-activitydefinition' ] }, 'extension' : [ { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies', 'code' : 'noSharing' } ] } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role', 'extension' : [ { 'url' : 'reference', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/25403' } }, { 'url' : 'role', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/modifier-role', 'code' : 'owner' } ] } } ] } ], 'version' : '1.0', 'name' : '0ca879ed-678c-4439-aa4a-efc597f92dfb', 'status' : 'active', 'topic' : [ { 'coding' : [ { 'system' : 'http://terminology.hl7.org/CodeSystem/definition-topic', 'code' : 'treatment' } ] } ], 'relatedArtifact' : [ { 'type' : 'composed-of', 'resource' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529' } ], 'code' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/activitydefinition-code', 'code' : '273586006' } ] } } }, { 'fullUrl' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529/_history/1', 'resource' : { 'resourceType' : 'Questionnaire', 'id' : '44529', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire' ] }, 'extension' : [ { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-type', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/questionnaire-types', 'code' : 'QQ' } ] } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role', 'extension' : [ { 'url' : 'reference', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/24153' } }, { 'url' : 'role', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/modifier-role', 'code' : 'owner' } ] } } ] } ], 'version' : '1.0', 'name' : '090b990e-046a-4374-b7c6-b08613a41cce', 'status' : 'active' } }, { 'fullUrl' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/98618/_history/1', 'resource' : { 'resourceType' : 'Organization', 'id' : '98618', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization' ] }, 'extension' : [ { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-source', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/organization-source', 'code' : 'manual' } ] } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-synchronizationStatus', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/organization-synchronization-status', 'code' : 'NotSynchronized' } ] } } ], 'identifier' : [ { 'use' : 'official', 'system' : 'urn:oid:2.16.840.1.113883.2.24.1.1', 'value' : '11111111', 'period' : { 'start' : '2023-10-10T14:49:12+02:00' } } ], 'active' : false, 'name' : 'defaultTestFactory-be16f47b-1f8a-4440-a02e-23da1219b0ca', 'partOf' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/22124' } } }, { 'fullUrl' : 'https://organization.local.ehealth.sundhed.dk/fhir/CareTeam/87455/_history/1', 'resource' : { 'resourceType' : 'CareTeam', 'id' : '87455', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam' ] }, 'identifier' : [ { 'system' : 'urn:ietf:rfc:3986', 'value' : 'urn:uuid:9658ef5f-019a-4c90-9c41-f3ad14a31777' } ], 'status' : 'active', 'name' : '1b900db5-09dd-4563-b612-2b81201fab16', 'reasonCode' : [ { 'coding' : [ { 'system' : 'urn:oid:1.2.208.176.2.4', 'code' : 'DJ44' } ] } ] } }, { 'fullUrl' : 'https://measurement.local.ehealth.sundhed.dk/fhir/QuestionnaireResponse/92491/_history/1', 'resource' : { 'resourceType' : 'QuestionnaireResponse', 'id' : '92491', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse' ] }, 'extension' : [ { 'url' : 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare', 'valueReference' : { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/22208' } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing', 'extension' : [ { 'url' : 'serviceRequestVersionId', 'valueId' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439/_history/1' }, { 'url' : 'start', 'valueDateTime' : '2023-10-10T14:49:12+02:00' }, { 'url' : 'end', 'valueDateTime' : '2023-10-10T14:49:12+02:00' }, { 'url' : 'type', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/resolved-timing-type', 'code' : 'Resolved' } ] } } ] } ], 'basedOn' : [ { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439' } ], 'questionnaire' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529', 'status' : 'completed', 'subject' : { 'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/64465' }, 'authored' : '2023-10-10T14:49:12+02:00', 'source' : { 'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/75218' } } }, { 'fullUrl' : 'https://patient.local.ehealth.sundhed.dk/fhir/Communication/97180/_history/1', 'resource' : { 'resourceType' : 'Communication', 'id' : '97180', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication' ] }, 'extension' : [ { 'url' : 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare', 'valueReference' : { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/14233' } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/restriction-category', 'code' : 'None' } ] } } ], 'basedOn' : [ { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439' } ], 'status' : 'in-progress', 'category' : [ { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/communication-category', 'code' : 'annotation' } ] }, { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/message-category', 'code' : 'advice' } ] } ], 'subject' : { 'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/35194' }, 'topic' : { 'coding' : [ { 'system' : 'http://terminology.hl7.org/CodeSystem/communication-topic', 'code' : 'report-labs' } ] }, 'sent' : '2023-10-10T14:49:12+02:00', 'reasonCode' : [ { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/message-reasonCode', 'code' : 'ReminderSubmitMeasurement' } ] } ] } }, { 'fullUrl' : 'urn:uuid:57cfd6a7-dd43-4caa-8220-d50c77aebd8b', 'resource' : { 'resourceType' : 'Parameters', 'parameter' : [ { 'name' : 'serviceRequestResponseSummary', 'part' : [ { 'name' : 'serviceRequest', 'valueReference' : { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439' }, 'part' : [ { 'name' : 'condition', 'valueCoding' : { 'system' : 'urn:oid:1.2.208.176.2.4', 'code' : 'DJ44', 'display' : 'Kronisk obstruktiv lungesygdom' } }, { 'name' : 'episodeOfCareManagingOrganization', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/98618' } }, { 'name' : 'episodeOfCarePeriod', 'valuePeriod' : { 'start' : '1970-01-01T01:00:01+01:00', 'end' : '1970-01-01T01:01:40+01:00' } }, { 'name' : 'patientIdentifier', 'valueIdentifier' : { 'system' : 'urn:oid:1.2.208.176.1.2', 'value' : '0101010001' } }, { 'name' : 'statusHistory', 'part' : [ { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'draft' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-02T12:49:12+00:00', 'end' : '2023-10-03T12:49:12+00:00' } } ] }, { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'active' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-03T12:49:12+00:00', 'end' : '2023-10-04T12:49:12+00:00' } } ] }, { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'on-hold' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-04T12:49:12+00:00', 'end' : '2023-10-05T12:49:12+00:00' } } ] }, { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'active' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-05T12:49:12+00:00', 'end' : '2023-10-08T12:49:12+00:00' } } ] }, { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'on-hold' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-08T12:49:12+00:00' } } ] } ] }, { 'name' : 'involvedCareTeams', 'part' : [ { 'name' : 'careTeam', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/CareTeam/87455' } } ] }, { 'name' : 'responses', 'part' : [ { 'name' : 'response', 'part' : [ { 'name' : 'occurrence', 'part' : [ { 'name' : 'serviceRequestVersionId', 'valueId' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439/_history/1' }, { 'name' : 'start', 'valueDateTime' : '2023-10-10T14:49:12+02:00' }, { 'name' : 'end', 'valueDateTime' : '2023-10-10T14:49:12+02:00' }, { 'name' : 'type', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/resolved-timing-type', 'code' : 'Resolved' } ] } } ] }, { 'name' : 'questionnaireResponse', 'valueReference' : { 'reference' : 'https://measurement.local.ehealth.sundhed.dk/fhir/QuestionnaireResponse/92491' } }, { 'name' : 'submitted', 'valueDateTime' : '2023-10-10T12:49:12+00:00' } ] } ] }, { 'name' : 'communications', 'part' : [ { 'name' : 'communication', 'valueReference' : { 'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Communication/97180' } } ] } ] } ] } ] } } ] } 

URL: [base]/$fetch-questionnaireresponses

### Parameters

* **Use**: IN
  * **Name**: anonymization
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [string](http://hl7.org/fhir/R4/datatypes.html#string)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: _partition
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [integer](http://hl7.org/fhir/R4/datatypes.html#integer)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: organization
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: condition
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)
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
  * **Name**: plan
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: questionnaire
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: careteam
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: tag
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)
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
  "id" : "-s-fetch-questionnaireresponses",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-fetch-questionnaireresponses",
  "version" : "6.0.0",
  "name" : "fetch-questionnaireresponses",
  "title" : "Fetch questionnare responses",
  "status" : "active",
  "kind" : "operation",
  "date" : "2025-10-23T10:25:37+00:00",
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
  "description" : "### Report Contents\nThis report contains a collection of questionnaire responses and related resources\n- Organizations\n- CareTeams\n- PlanDefinitions\n- ActivityDefinitions\n- Questionnaires\n- QuestionnaireResponses\n- Communication\n- ServiceRequestSummary\n### Grouping \nThis report is grouped by Questionnaire. Each group is returned as a FHIR bundle in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- condition: Filter on CarePlan.addresses.code match\n- period: Filter on QuestionnaireResponse.authored within period\n- plan: Filter on Plan match\n- questionnaire: Filter on ActivityDefinition.composed-of match\n- careteam: Filter on careteam in CarePlan.careteam or EpisodeOfCare.team\n- tag: Filter on tag match\n\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\n### Output\n{\n  'resourceType' : 'Bundle',\n  'id' : 'Questionnaire/44529',\n  'entry' : [ {\n    'fullUrl' : 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/24206/_history/1',\n    'resource' : {\n      'resourceType' : 'PlanDefinition',\n      'id' : '24206',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition' ]\n      },\n      'extension' : [ {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n        'extension' : [ {\n          'url' : 'reference',\n          'valueReference' : {\n            'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/14291'\n          }\n        }, {\n          'url' : 'role',\n          'valueCodeableConcept' : {\n            'coding' : [ {\n              'system' : 'http://ehealth.sundhed.dk/cs/modifier-role',\n              'code' : 'owner'\n            } ]\n          }\n        } ]\n      } ],\n      'version' : '1.0',\n      'status' : 'active',\n      'action' : [ {\n        'definitionCanonical' : 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/10919'\n      } ]\n    }\n  }, {\n    'fullUrl' : 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/10919/_history/1',\n    'resource' : {\n      'resourceType' : 'ActivityDefinition',\n      'id' : '10919',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-activitydefinition' ]\n      },\n      'extension' : [ {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies',\n            'code' : 'noSharing'\n          } ]\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n        'extension' : [ {\n          'url' : 'reference',\n          'valueReference' : {\n            'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/25403'\n          }\n        }, {\n          'url' : 'role',\n          'valueCodeableConcept' : {\n            'coding' : [ {\n              'system' : 'http://ehealth.sundhed.dk/cs/modifier-role',\n              'code' : 'owner'\n            } ]\n          }\n        } ]\n      } ],\n      'version' : '1.0',\n      'name' : '0ca879ed-678c-4439-aa4a-efc597f92dfb',\n      'status' : 'active',\n      'topic' : [ {\n        'coding' : [ {\n          'system' : 'http://terminology.hl7.org/CodeSystem/definition-topic',\n          'code' : 'treatment'\n        } ]\n      } ],\n      'relatedArtifact' : [ {\n        'type' : 'composed-of',\n        'resource' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529'\n      } ],\n      'code' : {\n        'coding' : [ {\n          'system' : 'http://ehealth.sundhed.dk/cs/activitydefinition-code',\n          'code' : '273586006'\n        } ]\n      }\n    }\n  }, {\n    'fullUrl' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529/_history/1',\n    'resource' : {\n      'resourceType' : 'Questionnaire',\n      'id' : '44529',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire' ]\n      },\n      'extension' : [ {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-type',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/questionnaire-types',\n            'code' : 'QQ'\n          } ]\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n        'extension' : [ {\n          'url' : 'reference',\n          'valueReference' : {\n            'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/24153'\n          }\n        }, {\n          'url' : 'role',\n          'valueCodeableConcept' : {\n            'coding' : [ {\n              'system' : 'http://ehealth.sundhed.dk/cs/modifier-role',\n              'code' : 'owner'\n            } ]\n          }\n        } ]\n      } ],\n      'version' : '1.0',\n      'name' : '090b990e-046a-4374-b7c6-b08613a41cce',\n      'status' : 'active'\n    }\n  }, {\n    'fullUrl' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/98618/_history/1',\n    'resource' : {\n      'resourceType' : 'Organization',\n      'id' : '98618',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization' ]\n      },\n      'extension' : [ {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-source',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/organization-source',\n            'code' : 'manual'\n          } ]\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-synchronizationStatus',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/organization-synchronization-status',\n            'code' : 'NotSynchronized'\n          } ]\n        }\n      } ],\n      'identifier' : [ {\n        'use' : 'official',\n        'system' : 'urn:oid:2.16.840.1.113883.2.24.1.1',\n        'value' : '11111111',\n        'period' : {\n          'start' : '2023-10-10T14:49:12+02:00'\n        }\n      } ],\n      'active' : false,\n      'name' : 'defaultTestFactory-be16f47b-1f8a-4440-a02e-23da1219b0ca',\n      'partOf' : {\n        'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/22124'\n      }\n    }\n  }, {\n    'fullUrl' : 'https://organization.local.ehealth.sundhed.dk/fhir/CareTeam/87455/_history/1',\n    'resource' : {\n      'resourceType' : 'CareTeam',\n      'id' : '87455',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam' ]\n      },\n      'identifier' : [ {\n        'system' : 'urn:ietf:rfc:3986',\n        'value' : 'urn:uuid:9658ef5f-019a-4c90-9c41-f3ad14a31777'\n      } ],\n      'status' : 'active',\n      'name' : '1b900db5-09dd-4563-b612-2b81201fab16',\n      'reasonCode' : [ {\n        'coding' : [ {\n          'system' : 'urn:oid:1.2.208.176.2.4',\n          'code' : 'DJ44'\n        } ]\n      } ]\n    }\n  }, {\n    'fullUrl' : 'https://measurement.local.ehealth.sundhed.dk/fhir/QuestionnaireResponse/92491/_history/1',\n    'resource' : {\n      'resourceType' : 'QuestionnaireResponse',\n      'id' : '92491',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse' ]\n      },\n      'extension' : [ {\n        'url' : 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare',\n        'valueReference' : {\n          'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/22208'\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing',\n        'extension' : [ {\n          'url' : 'serviceRequestVersionId',\n          'valueId' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439/_history/1'\n        }, {\n          'url' : 'start',\n          'valueDateTime' : '2023-10-10T14:49:12+02:00'\n        }, {\n          'url' : 'end',\n          'valueDateTime' : '2023-10-10T14:49:12+02:00'\n        }, {\n          'url' : 'type',\n          'valueCodeableConcept' : {\n            'coding' : [ {\n              'system' : 'http://ehealth.sundhed.dk/cs/resolved-timing-type',\n              'code' : 'Resolved'\n            } ]\n          }\n        } ]\n      } ],\n      'basedOn' : [ {\n        'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439'\n      } ],\n      'questionnaire' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529',\n      'status' : 'completed',\n      'subject' : {\n        'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/64465'\n      },\n      'authored' : '2023-10-10T14:49:12+02:00',\n      'source' : {\n        'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/75218'\n      }\n    }\n  }, {\n    'fullUrl' : 'https://patient.local.ehealth.sundhed.dk/fhir/Communication/97180/_history/1',\n    'resource' : {\n      'resourceType' : 'Communication',\n      'id' : '97180',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication' ]\n      },\n      'extension' : [ {\n        'url' : 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare',\n        'valueReference' : {\n          'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/14233'\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/restriction-category',\n            'code' : 'None'\n          } ]\n        }\n      } ],\n      'basedOn' : [ {\n        'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439'\n      } ],\n      'status' : 'in-progress',\n      'category' : [ {\n        'coding' : [ {\n          'system' : 'http://ehealth.sundhed.dk/cs/communication-category',\n          'code' : 'annotation'\n        } ]\n      }, {\n        'coding' : [ {\n          'system' : 'http://ehealth.sundhed.dk/cs/message-category',\n          'code' : 'advice'\n        } ]\n      } ],\n      'subject' : {\n        'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/35194'\n      },\n      'topic' : {\n        'coding' : [ {\n          'system' : 'http://terminology.hl7.org/CodeSystem/communication-topic',\n          'code' : 'report-labs'\n        } ]\n      },\n      'sent' : '2023-10-10T14:49:12+02:00',\n      'reasonCode' : [ {\n        'coding' : [ {\n          'system' : 'http://ehealth.sundhed.dk/cs/message-reasonCode',\n          'code' : 'ReminderSubmitMeasurement'\n        } ]\n      } ]\n    }\n  }, {\n    'fullUrl' : 'urn:uuid:57cfd6a7-dd43-4caa-8220-d50c77aebd8b',\n    'resource' : {\n      'resourceType' : 'Parameters',\n      'parameter' : [ {\n        'name' : 'serviceRequestResponseSummary',\n        'part' : [ {\n          'name' : 'serviceRequest',\n          'valueReference' : {\n            'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439'\n          },\n          'part' : [ {\n            'name' : 'condition',\n            'valueCoding' : {\n              'system' : 'urn:oid:1.2.208.176.2.4',\n              'code' : 'DJ44',\n              'display' : 'Kronisk obstruktiv lungesygdom'\n            }\n          }, {\n            'name' : 'episodeOfCareManagingOrganization',\n            'valueReference' : {\n              'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/98618'\n            }\n          }, {\n            'name' : 'episodeOfCarePeriod',\n            'valuePeriod' : {\n              'start' : '1970-01-01T01:00:01+01:00',\n              'end' : '1970-01-01T01:01:40+01:00'\n            }\n          }, {\n            'name' : 'patientIdentifier',\n            'valueIdentifier' : {\n              'system' : 'urn:oid:1.2.208.176.1.2',\n              'value' : '0101010001'\n            }\n          }, {\n            'name' : 'statusHistory',\n            'part' : [ {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'draft'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-02T12:49:12+00:00',\n                  'end' : '2023-10-03T12:49:12+00:00'\n                }\n              } ]\n            }, {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'active'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-03T12:49:12+00:00',\n                  'end' : '2023-10-04T12:49:12+00:00'\n                }\n              } ]\n            }, {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'on-hold'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-04T12:49:12+00:00',\n                  'end' : '2023-10-05T12:49:12+00:00'\n                }\n              } ]\n            }, {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'active'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-05T12:49:12+00:00',\n                  'end' : '2023-10-08T12:49:12+00:00'\n                }\n              } ]\n            }, {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'on-hold'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-08T12:49:12+00:00'\n                }\n              } ]\n            } ]\n          }, {\n            'name' : 'involvedCareTeams',\n            'part' : [ {\n              'name' : 'careTeam',\n              'valueReference' : {\n                'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/CareTeam/87455'\n              }\n            } ]\n          }, {\n            'name' : 'responses',\n            'part' : [ {\n              'name' : 'response',\n              'part' : [ {\n                'name' : 'occurrence',\n                'part' : [ {\n                  'name' : 'serviceRequestVersionId',\n                  'valueId' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439/_history/1'\n                }, {\n                  'name' : 'start',\n                  'valueDateTime' : '2023-10-10T14:49:12+02:00'\n                }, {\n                  'name' : 'end',\n                  'valueDateTime' : '2023-10-10T14:49:12+02:00'\n                }, {\n                  'name' : 'type',\n                  'valueCodeableConcept' : {\n                    'coding' : [ {\n                      'system' : 'http://ehealth.sundhed.dk/cs/resolved-timing-type',\n                      'code' : 'Resolved'\n                    } ]\n                  }\n                } ]\n              }, {\n                'name' : 'questionnaireResponse',\n                'valueReference' : {\n                  'reference' : 'https://measurement.local.ehealth.sundhed.dk/fhir/QuestionnaireResponse/92491'\n                }\n              }, {\n                'name' : 'submitted',\n                'valueDateTime' : '2023-10-10T12:49:12+00:00'\n              } ]\n            } ]\n          }, {\n            'name' : 'communications',\n            'part' : [ {\n              'name' : 'communication',\n              'valueReference' : {\n                'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Communication/97180'\n              }\n            } ]\n          } ]\n        } ]\n      } ]\n    }\n  } ]\n}\n\n",
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
  "code" : "fetch-questionnaireresponses",
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
      "name" : "_partition",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "integer"
    },
    {
      "name" : "organization",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "type" : "Reference"
    },
    {
      "name" : "condition",
      "use" : "in",
      "min" : 0,
      "max" : "*",
      "type" : "Coding"
    },
    {
      "name" : "period",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "Period"
    },
    {
      "name" : "plan",
      "use" : "in",
      "min" : 0,
      "max" : "*",
      "type" : "Reference"
    },
    {
      "name" : "questionnaire",
      "use" : "in",
      "min" : 0,
      "max" : "*",
      "type" : "Reference"
    },
    {
      "name" : "careteam",
      "use" : "in",
      "min" : 0,
      "max" : "*",
      "type" : "Reference"
    },
    {
      "name" : "tag",
      "use" : "in",
      "min" : 0,
      "max" : "*",
      "type" : "Coding"
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
