# Artifacts Summary - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Behavior: Capability Statements 

The following artifacts define the specific capabilities that different types of systems are expected to have in order to comply with this implementation guide. Systems conforming to this implementation guide are expected to declare conformance to one or more of the following capability statements.

| |
| :--- |
| [careplan](CapabilityStatement-careplan.md) |
| [device](CapabilityStatement-device.md) |
| [document-query](CapabilityStatement-document-query.md) |
| [document-transformation](CapabilityStatement-document-transformation.md) |
| [library](CapabilityStatement-library.md) |
| [measurement](CapabilityStatement-measurement.md) |
| [organization](CapabilityStatement-organization.md) |
| [patient](CapabilityStatement-patient.md) |
| [plan](CapabilityStatement-plan.md) |
| [questionnaire](CapabilityStatement-questionnaire.md) |
| [reporting](CapabilityStatement-reporting.md) |
| [task](CapabilityStatement-task.md) |
| [terminology](CapabilityStatement-terminology.md) |

### Behavior: Operation Definitions 

These are custom operations that can be supported by and/or invoked by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Create Patient](OperationDefinition-ehealth-patient-create.md) | Creates a Patient resource on the server and returns it in the response. If the patient already exists, it is returned instead. If the CPR number does not match a patient on the service, looks up the CPR in the national registry and finds any potential prior CPRs used by the person. If a prior CPR number matches a patient on the service, updates the patient with national data, and returns a patient with the newest data. NOTE: This means that the returned patient can have a different identifier than the one used for the request. If no prior CPR matches, creates a new patient using national data. If the CPR is invalid, i.e. does not correspond to a patient on the national registry, it errors.### Note This operation is currently the only way to create Patient resources in the eHealth Infrastructure, as it ensures that the correct bindings from national registers |
| [Create a careplan](OperationDefinition--s-apply.md) | Create a careplan with service requests for a specific episodeOfCare using the PlanDefinition as a template. If using POST the operation will persist resources and return the careplan. If using GET the operation will return transient resources in a transaction bundle. The bundle with transient careplan and servicerequest resources can then be modified before being persisted using a FHIR transaction. |
| [Create a careplan](OperationDefinition-PlanDefinition-i-apply.md) | Create a careplan with service requests for a specific episodeOfCare using the PlanDefinition as a template. If using POST the operation will persist resources and return the careplan. If using GET the operation will return transient resources in a transaction bundle. The bundle with transient careplan and servicerequest resources can then be modified before being persisted using a FHIR transaction. |
| [Create a clone of a Questionnaire](OperationDefinition-Questionnaire-i-create-clone.md) | ### Input* resourceId: reference to the Questionnaire resource that should be cloned
* clone-operation: minor-version/major-version/copy Coding from codesystem: http://ehealth.sundhed.dk/cs/ehealth-clone-operation
### OutputBundle containing all resources that were created during the operation.### Validation* New business versions require that the user has modifier-role: owner or co-author for the resource
* New copy does not require that the user has a modifier-role.
* New business version can be made only when no draft resource exists (having identical base identifier).
* Read/search/create privileges are required for the resource types affected by $create-clone
 |
| [Create a clone of an ActivityDefinition](OperationDefinition-ActivityDefinitionPlanDefinition-i-create-clone.md) | ### Input* resourceId: reference to the ActivityDefinition resource that should be cloned
* clone_operation: minor-version/major-version/copy Coding from codesystem: http://ehealth.sundhed.dk/cs/ehealth-clone-operation
* default-clone-behavior: true/false. False signifies deep-clone mode where the list of deep-clone-references determine which resources should be cloned
* deep-clone-references: References to resources to create as new resources rather than referencing the existing ones.
### OutputBundle containing all resources that were created during the operation.### Validation* New business versions require that the user has modifier-role: owner or co-author for the resource
* New copy does not require that the user has a modifier-role.
* New business version can be made only when no draft resource exists (having identical base identifier).
* Read/search/create privileges are required for the resource types affected by $create-clone
 |
| [Create an EpisodeOfCare](OperationDefinition--s-create-episode-of-care.md) | This operation persists an EpisodeOfCare based on the transient value of an EpisodeOfCare provided in the input.## Input The input is a Bundle which must contain exactly one EpisodeOfCare, conditions referenced in diagnosis list and at least one Provenance resource. All Provenances in the input must have the EpisodeOfCare as target. At least one Provenance must be interpreted into a 'Privacy-provenance' (see below).### The EpisodeOfCare resource The EpisodeOfCare has to have`PLANNED`status The 'id' property of the EpisodeOfCare will be reassigned by the server, but can be referenced by other resources in the same bundle. The 'managingOrganization' property of the EpisodeOfCare references the GDPR Data Controller (Danish: 'Dataansvarlig').### The privacy-Provenance resource A privacy-Provenance is a Provenance resource characterized by having at least one entry in Provenance.policy which data are transported, stored, or processed in the system. Possible values are:* 'http://ehealth.sundhed.dk/policy/dk/sundhedsloven' 
* For any diagnosis listed, the referenced Condition must be concerning the same Patient as the EpisodeOfCare. 


  For valid inputs, the server will create, persist and return a new EpisodeOfCare, client-supplied provenances, conditions and origin-provenance carrying a server-assigned ids. To get resources bodies in the output the request header has to contain parameter `Prefer: return=representation`. 
* Whenever an EpisodeOfCare is created, the server automatically creates an 'origin' Provenance resource point to it (in addition to the client-supplied Privacy-Provenance). This Origin-Provenance resource is filled with data from the JWT access token in order to record the origin of the EpisodeOfCare resource. For instance agent.whoReference points to a resource which is created as a shadow identity from the JWT token.
 |
| [Deprecate document](OperationDefinition-DocumentReference-t-deprecate-document.md) | Deprecates a shared document. The operation takes a documentIdentifier and cpr-number as parameters and finds the DocumentReference with the corresponding masterIdentifier. masterIdentifier should be unique for DocumentReference so if less than 0 or more than 1 are found the operation throws and exception. If the found documentReference has a patient which cpr number matches the provided value the document is deprecated. iti-57 is used to deprecate the document on XDS. On successthe documentReference status is updated to superseded and updated in the database. |
| [Evaluate](OperationDefinition-Library-it-evaluate.md) | This operation evaluates parameters passed as input against the decision support rule identified by the Library resource. It returns the computed clinical decision support result and/or errors. The Library resource identifies the clinical decision rule and define its parameters.The operation is idempotent.### Input* 1..1 Parameters: HL7 FHIR [Parameters](https://www.hl7.org/fhir/stu3/parameters.html) resource containing input parameters for the clinical decision support computation.This should either be a QuestionnaireResponse or an Observation for evaluation.
### OutputUpon success this operation returns an GuidanceResponse resource containing the decision support result. |
| [Execute careplan and episode of care stats](OperationDefinition--s-execute-careplan-and-episode-of-care-stats.md) | ### Report ContentsThis report contains a count of active EpisodeOfCare and CarePlans.### GroupingThis report is grouped by ConditionCode. Each group is returned in a separate JSon file.### Parameters* organization: Filter on EpisodeOfCare.managingOrganization match
* period: Filter on CarePlan.period overlap
### OutputOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.### Example outputThe ConditionCode is a Fhir CodeableConcept. See the implementation guide for details```
{
    'ConditionCode': {
        'valueCodeableConcept': {
            'coding': [{
                    'system': 'urn:oid:1.2.208.176.2.4',
                    'code': 'DJ44'
                }
            ]
        }
    },
    'ConditionSummary': {
        'activeEpisodeOfCareCount': 1,
        'activeCarePlanCount': 1
    }
}

```
 |
| [Execute careplan customization stats](OperationDefinition--s-execute-careplan-customization-stats.md) | ### Report ContentsThis report contains a count of patient specific modifications of:* Measurement schedule timing
* This report is grouped by PlanDefinition. Each group is returned in a separate JSon file.
* organization: Filter on EpisodeOfCare.managingOrganization match
* period: Filter on CarePlan.period overlap
### OutputOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.### Example outputEHealthPlanDefinition is a Fhir resource. See the implementation guide for details```
{
    'EHealthPlanDefinition': {
        'resourceType': 'PlanDefinition',
        'id': '53450',
        'meta': {
            'versionId': '1',
            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']
        },
        'extension': [{
                'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',
                'extension': [{
                        'url': 'reference',
                        'valueReference': {
                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/85109'
                        }
                    }, {
                        'url': 'role',
                        'valueCodeableConcept': {
                            'coding': [{
                                    'system': 'http://ehealth.sundhed.dk/cs/modifier-role',
                                    'code': 'owner'
                                }
                            ]
                        }
                    }
                ]
            }
        ],
        'version': '97219ba1-2202-42a1-b99d-45de3a506b40',
        'status': 'active'
    },
    'CarePlanCustomizationSummary': {
        'timingCustomizationCount': 1,
        'referenceRangeCustomizationCount': 1
    }
}

```
 |
| [Execute careplan duration stats](OperationDefinition--s-execute-careplan-duration-stats.md) | ### Report ContentsThis report contains statistics on status changes for CarePlans:* count: Number of CarePlans in each state
* min: Shortest time spent in each state
* max: Longest time spent in each state
* sum: Sum of time spent in each state
* average: Average time spent in each state.
The durations are specified in[ISO 8601](https://www.digi.com/resources/documentation/digidocs/90001437-13/reference/r_iso_8601_duration_format.htm)format.### GroupingThis report is grouped by PlanDefinition. Each group is returned in a separate JSon file.### Parameters* organization: Filter on EpisodeOfCare.managingOrganization match
* period: Filter on CarePlan.period overlap
* condition: Filter on EpisodeOfCare condition match
### OutputOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.### Example outputEHealthPlanDefinition is a Fhir resource. See the implementation guide for details```
{
    'EHealthPlanDefinition': {
        'resourceType': 'PlanDefinition',
        'id': '257',
        'meta': {
            'versionId': '1',
            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']
        },
        'extension': [{
                'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',
                'extension': [{
                        'url': 'reference',
                        'valueReference': {
                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/73753'
                        }
                    }, {
                        'url': 'role',
                        'valueCodeableConcept': {
                            'coding': [{
                                    'system': 'http://ehealth.sundhed.dk/cs/modifier-role',
                                    'code': 'owner'
                                }
                            ]
                        }
                    }
                ]
            }
        ],
        'version': 'dc9ecd87-163f-4d2f-bdfe-434085eafe4f',
        'status': 'active'
    },
    'CarePlanStatusDurationSummary': {
        'statusDurationStatistics': {
            'draft': {
                'status': {
                    'valueCodeableConcept': {
                        'coding': [{
                                'system': 'http://hl7.org/fhir/care-plan-status',
                                'code': 'draft'
                            }
                        ]
                    }
                },
                'durationStatistics': {
                    'count': 2,
                    'min': 'P10DT10H0M0S',
                    'max': 'P15DT0H0M0S',
                    'sum': 'P25DT10H0M0S',
                    'average': 'P12DT17H0M0S'
                }
            },
            'active': {
                'status': {
                    'valueCodeableConcept': {
                        'coding': [{
                                'system': 'http://hl7.org/fhir/care-plan-status',
                                'code': 'active'
                            }
                        ]
                    }
                },
                'durationStatistics': {
                    'count': 2,
                    'min': 'P200DT0H0M0S',
                    'max': 'P200DT0H0M0S',
                    'sum': 'P400DT0H0M0S',
                    'average': 'P200DT0H0M0S'
                }
            },
            'completed': {
                'status': {
                    'valueCodeableConcept': {
                        'coding': [{
                                'system': 'http://hl7.org/fhir/care-plan-status',
                                'code': 'completed'
                            }
                        ]
                    }
                },
                'durationStatistics': {
                    'count': 2,
                    'min': 'P284DT14H0M0S',
                    'max': 'P380DT0H0M0S',
                    'sum': 'P664DT14H0M0S',
                    'average': 'P332DT7H0M0S'
                }
            },
            'suspended': {
                'status': {
                    'valueCodeableConcept': {
                        'coding': [{
                                'system': 'http://hl7.org/fhir/care-plan-status',
                                'code': 'suspended'
                            }
                        ]
                    }
                },
                'durationStatistics': {
                    'count': 2,
                    'min': 'P5DT0H0M0S',
                    'max': 'P5DT0H0M0S',
                    'sum': 'P10DT0H0M0S',
                    'average': 'P5DT0H0M0S'
                }
            }
        }
    }
}

```
 |
| [Execute careplans by patient](OperationDefinition--s-execute-careplans-by-patient.md) | ### Report ContentsThis report contains the following resources:* EpisodeOfCare
* PlanDefinition
* CarePlan
* This report is grouped by EpisodeOfCare. Each group is returned in a separate JSon file.
* organization: Filter on EpisodeOfCare.managingOrganization match
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details


  { 'EHealthEpisodeOfCare': { 'resourceType': 'EpisodeOfCare', 'id': '30254', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/88873' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/66740' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/18637' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/16046' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } }, 'EHealthCarePlan': [{ 'resourceType': 'CarePlan', 'id': '1597', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan'] }, 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/59578' } ], 'status': 'draft', 'intent': 'option', 'category': [{ 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/careplan-category', 'code': 'TBD' } ] } ], 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/57779' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/30254' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'addresses': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/74721' } ], 'activity': [{ 'reference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/76916' } } ] } ], 'EHealthPlanDefinition': [{ 'resourceType': 'PlanDefinition', 'id': '59578', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role', 'extension': [{ 'url': 'reference', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41757' } }, { 'url': 'role', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/modifier-role', 'code': 'owner' } ] } } ] } ], 'version': 'c701b8e8-abe6-41bd-9db5-c05b94bc1e2b', 'status': 'active' } ], 'EHealthServiceRequest': [{ 'resourceType': 'ServiceRequest', 'id': '76916', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies', 'code': 'TBD' } ] } } ], 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/13593' } ], 'status': 'completed', 'intent': 'filler-order', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code', 'code': 'TBD' } ], 'text': '31d136f2-0b98-4e0a-8f82-f0731b54893d' }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/49397' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/72791' } } ] }
 |
| [Execute careteam stats](OperationDefinition--s-execute-careteam-stats.md) | ### Report ContentsThis report contains counts of resources associated with CareTeams:* EpisodeOfCare
* CarePlan
* This report is grouped by CareTeam. Each group is returned in a separate JSon file.
* organization: Filter on CareTeam.managingOrganization match
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.
 |
| [Execute measurement stats](OperationDefinition--s-execute-measurement-stats.md) | ### Report ContentsThis report contains counts of Measurements for each EpisodeOfCare:* Observation
* QuestionnaireResponse
* This report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.
* organization: Filter on EpisodeOfCare.managingOrganization match
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.
 |
| [Execute patient GDPR](OperationDefinition--s-execute-patient-gdpr.md) | ### Report ContentsThis report contains all information related to the specified Patient### GroupingNone. This report returns a single JSon file.### Parameters* organization: Filter on EpisodeOfCare.managingOrganization match
* period: not used.
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details


  { 'Patient': { 'resourceType': 'Patient', 'id': '70791', 'meta': { 'versionId': '1' } }, 'Communication': [{ 'resourceType': 'Communication', 'id': '29256', 'meta': { 'versionId': '1' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'RelatedPerson': [{ 'resourceType': 'RelatedPerson', 'id': '44196', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson'] }, 'identifier': [{ 'use': 'official', 'system': 'urn:oid:1.2.208.176.1.2', 'value': '2412001234' } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' }, 'name': [{ 'text': 'Tester' } ] } ], 'Appointment': [{ 'resourceType': 'Appointment', 'id': '74036', 'meta': { 'versionId': '1' }, 'participant': [{ 'id': '5fda865d-5e46-4fc4-8dcc-9b5f9a6b501a', 'actor': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' } } ] } ], 'AppointmentResponse': [{ 'resourceType': 'AppointmentResponse', 'id': '63226', 'meta': { 'versionId': '1' }, 'actor': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' } } ], 'EHealthEpisodeOfCare': [{ 'resourceType': 'EpisodeOfCare', 'id': '10928', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/43014' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/33654' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } }, { 'resourceType': 'EpisodeOfCare', 'id': '48392', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41282' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/87020' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47956' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } } ], 'EHealthDeviceUseStatement': [{ 'resourceType': 'DeviceUseStatement', 'id': '4021', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context', 'valueReference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/87235' } } ], 'status': 'active', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/69099' }, 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' } }, { 'resourceType': 'DeviceUseStatement', 'id': '5732', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context', 'valueReference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23385' } } ], 'status': 'active', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/10543' }, 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/91432' } } ], 'EHealthDevice': [{ 'resourceType': 'Device', 'id': '81729', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned', 'valueBoolean': true } ], 'status': 'active' }, { 'resourceType': 'Device', 'id': '91432', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned', 'valueBoolean': true } ], 'status': 'active' } ], 'EHealthDeviceMetric': [{ 'resourceType': 'DeviceMetric', 'id': '35094', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 5 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 10 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 12 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 14 } ] } ], 'identifier': { 'value': 'Foo' }, 'type': { 'text': 'code' }, 'source': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' }, 'category': 'calculation' }, { 'resourceType': 'DeviceMetric', 'id': '22449', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 5 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 10 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 12 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 14 } ] } ], 'identifier': { 'value': 'Foo' }, 'type': { 'text': 'code' }, 'source': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' }, 'category': 'calculation' } ], 'EHealthConsent': [{ 'resourceType': 'Consent', 'id': '51690', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent'] }, 'status': 'active', 'category': [{ 'coding': [{ 'code': 'TBD' } ] } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'consentingParty': [{ 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/41034' } ], 'actor': [{ 'id': 'f31bec27-965f-49ea-b8fe-5fdb259c539d', 'role': { 'coding': [{ 'code': 'authserver' } ] }, 'reference': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/60499' } } ], 'policyRule': 'Rule', 'data': [{ 'meaning': 'related', 'reference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/51427' } } ] } ], 'EHealthCarePlan': [{ 'resourceType': 'CarePlan', 'id': '87235', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan'] }, 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/98996' } ], 'status': 'draft', 'intent': 'option', 'category': [{ 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/careplan-category', 'code': 'TBD' } ] } ], 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/55953' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'addresses': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/25664' } ] }, { 'resourceType': 'CarePlan', 'id': '23385', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan'] }, 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/83648' } ], 'status': 'draft', 'intent': 'option', 'category': [{ 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/careplan-category', 'code': 'TBD' } ] } ], 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/51258' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'addresses': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/4845' } ] } ], 'EHealthServiceRequest': [{ 'resourceType': 'ServiceRequest', 'id': '18904', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies', 'code': 'TBD' } ] } } ], 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/64273' } ], 'status': 'completed', 'intent': 'filler-order', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code', 'code': 'TBD' } ], 'text': '7654414a-7f86-4170-9920-fde60368b58b' }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/59415' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthCondition': [{ 'resourceType': 'Condition', 'id': '22743', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition'] }, 'clinicalStatus': 'active', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/conditions', 'code': 'TBD' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/84730' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthObservation': [{ 'resourceType': 'Observation', 'id': '55832', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation'] }, 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/69506' } ], 'status': 'amended', 'code': { 'coding': [{ 'system': 'urn:oid:1.2.208.176.2.1', 'code': 'NPU03011' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/96798' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'effectivePeriod': { 'start': '2020-03-26T13:37:40+01:00', 'end': '2020-03-26T13:37:40+01:00' }, 'performer': [{ 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/43621' } ], 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/30416' } } ], 'EHealthQuestionnaireResponse': [{ 'resourceType': 'QuestionnaireResponse', 'id': '21957', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse'] }, 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/12403' } ], 'questionnaire': { 'reference': 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/42078' }, 'status': 'completed', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47155' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'authored': '2020-03-26T13:37:40+01:00', 'source': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/61666' } } ], 'EHealthMedia': [{ 'resourceType': 'Media', 'id': '18256', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-quality', 'extension': [{ 'url': 'qualityType', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/quality-types', 'code': 'TBD' } ] } }, { 'url': 'qualityCode', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/usage-quality', 'code': 'TBD' } ] } } ] } ], 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/98474' } ], 'type': 'audio', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/20886' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'occurrenceDateTime': '2020-03-26T13:37:40+01:00', 'content': { 'language': 'en' } } ], 'EHealthClinicalImpression': [{ 'resourceType': 'ClinicalImpression', 'id': '39697', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression'] }, 'status': 'draft', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/clinicalimpression-codes', 'code': 'TBD' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/32140' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthTask': [{ 'resourceType': 'Task', 'id': '96988', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/task-category', 'code': 'TBD' } ] } }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/restriction-category', 'code': 'None' } ] } }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-responsible', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Practitioner/74334' } } ], 'status': 'draft', 'intent': 'proposal', 'priority': 'routine', 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthCommunication': [{ 'resourceType': 'Communication', 'id': '29256', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication'] }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthProvenance': [{ 'resourceType': 'Provenance', 'id': '68399', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance'] }, 'target': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } ], 'recorded': '2020-03-26T13:37:39.772+01:00', 'policy': ['policy'], 'agent': [{ 'whoReference': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/6901' } } ] }, { 'resourceType': 'Provenance', 'id': '96195', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance'] }, 'target': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392' } ], 'recorded': '2020-03-26T13:37:39.801+01:00', 'policy': ['policy'], 'agent': [{ 'whoReference': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/45854' } } ] } ] }
 |
| [Execute patient devices](OperationDefinition--s-execute-patient-devices.md) | ### Report ContentsThis report contains Device information for each EpisodeOfCare:* Device
* DeviceUseStatement
* This report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.
* organization: Filter on EpisodeOfCare.managingOrganization match
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details


  { 'EHealthEpisodeOfCare': { 'resourceType': 'EpisodeOfCare', 'id': 'F417C17F9FDE24C9090BD629C8EE1697', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/313D8B0E0AC8EA8169D1DA45ECEEACB9' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/9A7FCD55CA3031585A8F1690DB1D8034' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/A1D94F323D8EF09E5D913D9522FD83C4' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/8DC75F2B12BCC832F92CC065C3D0B451' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } }, 'EHealthDeviceUseStatement': [{ 'resourceType': 'DeviceUseStatement', 'id': '9541E8EAEAD24376F208D5CD8A4D25F5', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context', 'valueReference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23D34B29DD02EB232B6575537FE8ADC5' } } ], 'status': 'active', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/AC38B1F6391F256002E5A7BE69CB2586' }, 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/08D51B81A7FE5B480278150A94D4048A' } } ], 'EHealthDevice': [{ 'resourceType': 'Device', 'id': '08D51B81A7FE5B480278150A94D4048A', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned', 'valueBoolean': true } ], 'status': 'active' } ], 'EHealthDeviceMetric': [{ 'resourceType': 'DeviceMetric', 'id': '7EA21ACD27EE012439F1440574A6BB21', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 5 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 10 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 12 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 14 } ] } ], 'identifier': { 'value': 'Foo' }, 'type': { 'text': 'code' }, 'source': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/08D51B81A7FE5B480278150A94D4048A' }, 'category': 'calculation' } ] }
 |
| [Execute patient total](OperationDefinition--s-execute-patient-total.md) | ### Report ContentsThis report contains clinical information for each Patient### GroupingThis report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.### Parameters* organization: Filter on EpisodeOfCare.managingOrganization match
* period: Filter on EpisodeOfCare.period overlap
* conditionCode: Filter on Condition.code related to EpisodeOfCare
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details


  { 'Patient': { 'resourceType': 'Patient', 'id': '70791', 'meta': { 'versionId': '1' } }, 'EHealthEpisodeOfCare': [{ 'resourceType': 'EpisodeOfCare', 'id': '10928', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/43014' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/33654' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } }, { 'resourceType': 'EpisodeOfCare', 'id': '48392', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41282' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/87020' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47956' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } } ], 'EHealthDeviceUseStatement': [{ 'resourceType': 'DeviceUseStatement', 'id': '4021', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context', 'valueReference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/87235' } } ], 'status': 'active', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/69099' }, 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' } }, { 'resourceType': 'DeviceUseStatement', 'id': '5732', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context', 'valueReference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23385' } } ], 'status': 'active', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/10543' }, 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/91432' } } ], 'EHealthDevice': [{ 'resourceType': 'Device', 'id': '81729', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned', 'valueBoolean': true } ], 'status': 'active' }, { 'resourceType': 'Device', 'id': '91432', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned', 'valueBoolean': true } ], 'status': 'active' } ], 'EHealthDeviceMetric': [{ 'resourceType': 'DeviceMetric', 'id': '35094', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 5 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 10 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 12 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 14 } ] } ], 'identifier': { 'value': 'Foo' }, 'type': { 'text': 'code' }, 'source': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' }, 'category': 'calculation' }, { 'resourceType': 'DeviceMetric', 'id': '22449', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 5 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 10 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 12 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 14 } ] } ], 'identifier': { 'value': 'Foo' }, 'type': { 'text': 'code' }, 'source': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' }, 'category': 'calculation' } ], 'EHealthConsent': [{ 'resourceType': 'Consent', 'id': '51690', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent'] }, 'status': 'active', 'category': [{ 'coding': [{ 'code': 'TBD' } ] } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'consentingParty': [{ 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/41034' } ], 'actor': [{ 'id': 'f31bec27-965f-49ea-b8fe-5fdb259c539d', 'role': { 'coding': [{ 'code': 'authserver' } ] }, 'reference': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/60499' } } ], 'policyRule': 'Rule', 'data': [{ 'meaning': 'related', 'reference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/51427' } } ] } ], 'EHealthCarePlan': [{ 'resourceType': 'CarePlan', 'id': '87235', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan'] }, 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/98996' } ], 'status': 'draft', 'intent': 'option', 'category': [{ 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/careplan-category', 'code': 'TBD' } ] } ], 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/55953' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'addresses': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/25664' } ] }, { 'resourceType': 'CarePlan', 'id': '23385', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan'] }, 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/83648' } ], 'status': 'draft', 'intent': 'option', 'category': [{ 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/careplan-category', 'code': 'TBD' } ] } ], 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/51258' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'addresses': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/4845' } ] } ], 'EHealthServiceRequest': [{ 'resourceType': 'ServiceRequest', 'id': '18904', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies', 'code': 'TBD' } ] } } ], 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/64273' } ], 'status': 'completed', 'intent': 'filler-order', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code', 'code': 'TBD' } ], 'text': '7654414a-7f86-4170-9920-fde60368b58b' }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/59415' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthCondition': [{ 'resourceType': 'Condition', 'id': '22743', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition'] }, 'clinicalStatus': 'active', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/conditions', 'code': 'TBD' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/84730' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthObservation': [{ 'resourceType': 'Observation', 'id': '55832', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation'] }, 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/69506' } ], 'status': 'amended', 'code': { 'coding': [{ 'system': 'urn:oid:1.2.208.176.2.1', 'code': 'NPU03011' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/96798' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'effectivePeriod': { 'start': '2020-03-26T13:37:40+01:00', 'end': '2020-03-26T13:37:40+01:00' }, 'performer': [{ 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/43621' } ], 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/30416' } } ], 'EHealthQuestionnaireResponse': [{ 'resourceType': 'QuestionnaireResponse', 'id': '21957', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse'] }, 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/12403' } ], 'questionnaire': { 'reference': 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/42078' }, 'status': 'completed', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47155' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'authored': '2020-03-26T13:37:40+01:00', 'source': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/61666' } } ], 'EHealthMedia': [{ 'resourceType': 'Media', 'id': '18256', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-quality', 'extension': [{ 'url': 'qualityType', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/quality-types', 'code': 'TBD' } ] } }, { 'url': 'qualityCode', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/usage-quality', 'code': 'TBD' } ] } } ] } ], 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/98474' } ], 'type': 'audio', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/20886' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'occurrenceDateTime': '2020-03-26T13:37:40+01:00', 'content': { 'language': 'en' } } ], 'EHealthClinicalImpression': [{ 'resourceType': 'ClinicalImpression', 'id': '39697', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression'] }, 'status': 'draft', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/clinicalimpression-codes', 'code': 'TBD' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/32140' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ] }
 |
| [Execute practitioner GDPR](OperationDefinition--s-execute-practitioner-gdpr.md) | ### Report ContentsThis report contains all information related to the specified Practitioner* Practitioner
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
 |
| [Execute practitioner stats](OperationDefinition--s-execute-practitioner-stats.md) | ### Report ContentsThis report contains counts of practitioners associated with Organizations and CareTeams* List of Organization and associated practitonerCount
* None. The report is returned in a single JSon file.
* organization: 
* CareTeam: Filter on CareTeam.ManagingOrganization match
* PractitionerRole: Filter on PractitionerRole.Organization match
 
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.
 |
| [Execute questionnare responses](OperationDefinition--s-execute-questionnaireresponses.md) | ### Report ContentsThis report contains a collection of questionnaire responses and related resources* Organizations
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
### OutputOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.### Example output### Output{ 'resourceType' : 'Bundle', 'id' : 'Questionnaire/44529', 'entry' : [ { 'fullUrl' : 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/24206/_history/1', 'resource' : { 'resourceType' : 'PlanDefinition', 'id' : '24206', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition' ] }, 'extension' : [ { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role', 'extension' : [ { 'url' : 'reference', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/14291' } }, { 'url' : 'role', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/modifier-role', 'code' : 'owner' } ] } } ] } ], 'version' : '1.0', 'status' : 'active', 'action' : [ { 'definitionCanonical' : 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/10919' } ] } }, { 'fullUrl' : 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/10919/_history/1', 'resource' : { 'resourceType' : 'ActivityDefinition', 'id' : '10919', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-activitydefinition' ] }, 'extension' : [ { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies', 'code' : 'noSharing' } ] } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role', 'extension' : [ { 'url' : 'reference', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/25403' } }, { 'url' : 'role', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/modifier-role', 'code' : 'owner' } ] } } ] } ], 'version' : '1.0', 'name' : '0ca879ed-678c-4439-aa4a-efc597f92dfb', 'status' : 'active', 'topic' : [ { 'coding' : [ { 'system' : 'http://terminology.hl7.org/CodeSystem/definition-topic', 'code' : 'treatment' } ] } ], 'relatedArtifact' : [ { 'type' : 'composed-of', 'resource' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529' } ], 'code' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/activitydefinition-code', 'code' : '273586006' } ] } } }, { 'fullUrl' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529/_history/1', 'resource' : { 'resourceType' : 'Questionnaire', 'id' : '44529', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire' ] }, 'extension' : [ { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-type', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/questionnaire-types', 'code' : 'QQ' } ] } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role', 'extension' : [ { 'url' : 'reference', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/24153' } }, { 'url' : 'role', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/modifier-role', 'code' : 'owner' } ] } } ] } ], 'version' : '1.0', 'name' : '090b990e-046a-4374-b7c6-b08613a41cce', 'status' : 'active' } }, { 'fullUrl' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/98618/_history/1', 'resource' : { 'resourceType' : 'Organization', 'id' : '98618', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization' ] }, 'extension' : [ { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-source', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/organization-source', 'code' : 'manual' } ] } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-synchronizationStatus', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/organization-synchronization-status', 'code' : 'NotSynchronized' } ] } } ], 'identifier' : [ { 'use' : 'official', 'system' : 'urn:oid:2.16.840.1.113883.2.24.1.1', 'value' : '11111111', 'period' : { 'start' : '2023-10-10T14:49:12+02:00' } } ], 'active' : false, 'name' : 'defaultTestFactory-be16f47b-1f8a-4440-a02e-23da1219b0ca', 'partOf' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/22124' } } }, { 'fullUrl' : 'https://organization.local.ehealth.sundhed.dk/fhir/CareTeam/87455/_history/1', 'resource' : { 'resourceType' : 'CareTeam', 'id' : '87455', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam' ] }, 'identifier' : [ { 'system' : 'urn:ietf:rfc:3986', 'value' : 'urn:uuid:9658ef5f-019a-4c90-9c41-f3ad14a31777' } ], 'status' : 'active', 'name' : '1b900db5-09dd-4563-b612-2b81201fab16', 'reasonCode' : [ { 'coding' : [ { 'system' : 'urn:oid:1.2.208.176.2.4', 'code' : 'DJ44' } ] } ] } }, { 'fullUrl' : 'https://measurement.local.ehealth.sundhed.dk/fhir/QuestionnaireResponse/92491/_history/1', 'resource' : { 'resourceType' : 'QuestionnaireResponse', 'id' : '92491', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse' ] }, 'extension' : [ { 'url' : 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare', 'valueReference' : { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/22208' } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing', 'extension' : [ { 'url' : 'serviceRequestVersionId', 'valueId' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439/_history/1' }, { 'url' : 'start', 'valueDateTime' : '2023-10-10T14:49:12+02:00' }, { 'url' : 'end', 'valueDateTime' : '2023-10-10T14:49:12+02:00' }, { 'url' : 'type', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/resolved-timing-type', 'code' : 'Resolved' } ] } } ] } ], 'basedOn' : [ { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439' } ], 'questionnaire' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529', 'status' : 'completed', 'subject' : { 'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/64465' }, 'authored' : '2023-10-10T14:49:12+02:00', 'source' : { 'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/75218' } } }, { 'fullUrl' : 'https://patient.local.ehealth.sundhed.dk/fhir/Communication/97180/_history/1', 'resource' : { 'resourceType' : 'Communication', 'id' : '97180', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication' ] }, 'extension' : [ { 'url' : 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare', 'valueReference' : { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/14233' } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/restriction-category', 'code' : 'None' } ] } } ], 'basedOn' : [ { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439' } ], 'status' : 'in-progress', 'category' : [ { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/communication-category', 'code' : 'annotation' } ] }, { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/message-category', 'code' : 'advice' } ] } ], 'subject' : { 'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/35194' }, 'topic' : { 'coding' : [ { 'system' : 'http://terminology.hl7.org/CodeSystem/communication-topic', 'code' : 'report-labs' } ] }, 'sent' : '2023-10-10T14:49:12+02:00', 'reasonCode' : [ { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/message-reasonCode', 'code' : 'ReminderSubmitMeasurement' } ] } ] } }, { 'fullUrl' : 'urn:uuid:57cfd6a7-dd43-4caa-8220-d50c77aebd8b', 'resource' : { 'resourceType' : 'Parameters', 'parameter' : [ { 'name' : 'serviceRequestResponseSummary', 'part' : [ { 'name' : 'serviceRequest', 'valueReference' : { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439' }, 'part' : [ { 'name' : 'condition', 'valueCoding' : { 'system' : 'urn:oid:1.2.208.176.2.4', 'code' : 'DJ44', 'display' : 'Kronisk obstruktiv lungesygdom' } }, { 'name' : 'episodeOfCareManagingOrganization', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/98618' } }, { 'name' : 'episodeOfCarePeriod', 'valuePeriod' : { 'start' : '1970-01-01T01:00:01+01:00', 'end' : '1970-01-01T01:01:40+01:00' } }, { 'name' : 'patientIdentifier', 'valueIdentifier' : { 'system' : 'urn:oid:1.2.208.176.1.2', 'value' : '0101010001' } }, { 'name' : 'statusHistory', 'part' : [ { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'draft' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-02T12:49:12+00:00', 'end' : '2023-10-03T12:49:12+00:00' } } ] }, { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'active' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-03T12:49:12+00:00', 'end' : '2023-10-04T12:49:12+00:00' } } ] }, { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'on-hold' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-04T12:49:12+00:00', 'end' : '2023-10-05T12:49:12+00:00' } } ] }, { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'active' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-05T12:49:12+00:00', 'end' : '2023-10-08T12:49:12+00:00' } } ] }, { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'on-hold' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-08T12:49:12+00:00' } } ] } ] }, { 'name' : 'involvedCareTeams', 'part' : [ { 'name' : 'careTeam', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/CareTeam/87455' } } ] }, { 'name' : 'responses', 'part' : [ { 'name' : 'response', 'part' : [ { 'name' : 'occurrence', 'part' : [ { 'name' : 'serviceRequestVersionId', 'valueId' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439/_history/1' }, { 'name' : 'start', 'valueDateTime' : '2023-10-10T14:49:12+02:00' }, { 'name' : 'end', 'valueDateTime' : '2023-10-10T14:49:12+02:00' }, { 'name' : 'type', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/resolved-timing-type', 'code' : 'Resolved' } ] } } ] }, { 'name' : 'questionnaireResponse', 'valueReference' : { 'reference' : 'https://measurement.local.ehealth.sundhed.dk/fhir/QuestionnaireResponse/92491' } }, { 'name' : 'submitted', 'valueDateTime' : '2023-10-10T12:49:12+00:00' } ] } ] }, { 'name' : 'communications', 'part' : [ { 'name' : 'communication', 'valueReference' : { 'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Communication/97180' } } ] } ] } ] } ] } } ] } |
| [Execute ssl orders](OperationDefinition--s-execute-ssl-orders.md) | ### Report ContentsThis report contains SSL Orders* OrderDetails
* OrderLines
* Order. Each Order is returned in a single JSon file.
* organization: Filter on Order.buyer
* period: Filter on TraceLine.timestamp
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are SSL resources. See the SSL API description for details


  { 'OrderDetails': { 'order': { 'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER', 'threadId': null, 'identifiers': null, 'status': null, 'priority': null, 'notes': null, 'buyer': 'https://ssl-order.local.ehealth.sundhed.dk/v1/party/BUYER', 'seller': 'https://ssl-order.local.ehealth.sundhed.dk/v1/party/SELLER', 'sellerDeliveryContactEmail': null, 'carePlanRef': null, 'carePlanTitle': null, 'earliestDeliveryDate': null, 'latestDeliveryDate': null, 'receiver': null }, 'orderLines': [{ 'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order-line/ORDERLINE', 'order': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER', 'status': null, 'item': null, 'agreedDate': null, 'device': null } ], 'traceLines': [{ 'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER/1', 'timestamp': '2019-12-24T18:00:00Z', 'createdByOrganization': null, 'createdByUser': null, 'text': null, 'supplementaryText': null, 'order': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER', 'orderLine': null, 'statusChange': null } ] } }
 |
| [Execute unique active citizens total](OperationDefinition--s-execute-patient-usage-stats.md) | ### Report ContentsThis report contains an overview of the number of unique active citizens with Episodes of Care, shown both on monthly and yearly basis.### GroupingThis report is grouped by months and years. All groups are contained in the same JSON file.### Parameters* Output can be found in Binary.content. This is a Base64 encoded .zip file containing a JSon file corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details First example is the monthly data:
{ 'PatientsUsageSummary': { 'monthData': [ { 'month': '1', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '2', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '3', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '4', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '5', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '6', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '7', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '8', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '9', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '10', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '11', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '12', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] } ] } }Second example is the yearly data:{ 'PatientsUsageSummary': { 'yearData': [ { 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 12, 'average': 1.0, 'usageBaseline': 10000, 'averageRounded': 1000.0, 'averageBeyondBaseline': 0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 12, 'average': 1.0, 'usageBaseline': 10000, 'averageRounded': 1000.0, 'averageBeyondBaseline': 0 } ] } ] } } |
| [Export Appointment to iCal](OperationDefinition-ehealth-appointment-toical.md) | This operation exports the Appointment to an iCal[RFC-5545](https://tools.ietf.org/html/rfc5545)format |
| [Export a PlanDefinition](OperationDefinition-PlanDefinition-i-export.md) | Export a PlanDefinition.### Export ContentsThe export contains the PlanDefinition including referenced resources:- PlanDefinitions* ActivityDefinitions
* Questionnaires
* Libraries
* Organizations
* DocumentReference + QFDD
Each resource is returned in a separate JSon file.### Parameters* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files. All returned objects are Fhir resources. See the implementation guide for details
 |
| [Fetch careplan and episode of care stats](OperationDefinition--s-fetch-careplan-and-episode-of-care-stats.md) | ### Report ContentsThis report contains a count of active EpisodeOfCare and CarePlans.### GroupingThis report is grouped by ConditionCode. Each group is returned in a separate JSon file.### Parameters* organization: Filter on EpisodeOfCare.managingOrganization match
* period: Filter on CarePlan.period overlap
### OutputOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.### Example outputThe ConditionCode is a Fhir CodeableConcept. See the implementation guide for details```
{
    'ConditionCode': {
        'valueCodeableConcept': {
            'coding': [{
                    'system': 'urn:oid:1.2.208.176.2.4',
                    'code': 'DJ44'
                }
            ]
        }
    },
    'ConditionSummary': {
        'activeEpisodeOfCareCount': 1,
        'activeCarePlanCount': 1
    }
}

```
 |
| [Fetch careplan customization stats](OperationDefinition--s-fetch-careplan-customization-stats.md) | ### Report ContentsThis report contains a count of patient specific modifications of:* Measurement schedule timing
* This report is grouped by PlanDefinition. Each group is returned in a separate JSon file.
* organization: Filter on EpisodeOfCare.managingOrganization match
* period: Filter on CarePlan.period overlap
### OutputOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.### Example outputEHealthPlanDefinition is a Fhir resource. See the implementation guide for details```
{
    'EHealthPlanDefinition': {
        'resourceType': 'PlanDefinition',
        'id': '53450',
        'meta': {
            'versionId': '1',
            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']
        },
        'extension': [{
                'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',
                'extension': [{
                        'url': 'reference',
                        'valueReference': {
                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/85109'
                        }
                    }, {
                        'url': 'role',
                        'valueCodeableConcept': {
                            'coding': [{
                                    'system': 'http://ehealth.sundhed.dk/cs/modifier-role',
                                    'code': 'owner'
                                }
                            ]
                        }
                    }
                ]
            }
        ],
        'version': '97219ba1-2202-42a1-b99d-45de3a506b40',
        'status': 'active'
    },
    'CarePlanCustomizationSummary': {
        'timingCustomizationCount': 1,
        'referenceRangeCustomizationCount': 1
    }
}

```
 |
| [Fetch careplan duration stats](OperationDefinition--s-fetch-careplan-duration-stats.md) | ### Report ContentsThis report contains statistics on status changes for CarePlans:* count: Number of CarePlans in each state
* min: Shortest time spent in each state
* max: Longest time spent in each state
* sum: Sum of time spent in each state
* average: Average time spent in each state.
The durations are specified in[ISO 8601](https://www.digi.com/resources/documentation/digidocs/90001437-13/reference/r_iso_8601_duration_format.htm)format.### GroupingThis report is grouped by PlanDefinition. Each group is returned in a separate JSon file.### Parameters* organization: Filter on EpisodeOfCare.managingOrganization match
* period: Filter on CarePlan.period overlap
* condition: Filter on EpisodeOfCare condition match
### OutputOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.### Example outputEHealthPlanDefinition is a Fhir resource. See the implementation guide for details```
{
    'EHealthPlanDefinition': {
        'resourceType': 'PlanDefinition',
        'id': '257',
        'meta': {
            'versionId': '1',
            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']
        },
        'extension': [{
                'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',
                'extension': [{
                        'url': 'reference',
                        'valueReference': {
                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/73753'
                        }
                    }, {
                        'url': 'role',
                        'valueCodeableConcept': {
                            'coding': [{
                                    'system': 'http://ehealth.sundhed.dk/cs/modifier-role',
                                    'code': 'owner'
                                }
                            ]
                        }
                    }
                ]
            }
        ],
        'version': 'dc9ecd87-163f-4d2f-bdfe-434085eafe4f',
        'status': 'active'
    },
    'CarePlanStatusDurationSummary': {
        'statusDurationStatistics': {
            'draft': {
                'status': {
                    'valueCodeableConcept': {
                        'coding': [{
                                'system': 'http://hl7.org/fhir/care-plan-status',
                                'code': 'draft'
                            }
                        ]
                    }
                },
                'durationStatistics': {
                    'count': 2,
                    'min': 'P10DT10H0M0S',
                    'max': 'P15DT0H0M0S',
                    'sum': 'P25DT10H0M0S',
                    'average': 'P12DT17H0M0S'
                }
            },
            'active': {
                'status': {
                    'valueCodeableConcept': {
                        'coding': [{
                                'system': 'http://hl7.org/fhir/care-plan-status',
                                'code': 'active'
                            }
                        ]
                    }
                },
                'durationStatistics': {
                    'count': 2,
                    'min': 'P200DT0H0M0S',
                    'max': 'P200DT0H0M0S',
                    'sum': 'P400DT0H0M0S',
                    'average': 'P200DT0H0M0S'
                }
            },
            'completed': {
                'status': {
                    'valueCodeableConcept': {
                        'coding': [{
                                'system': 'http://hl7.org/fhir/care-plan-status',
                                'code': 'completed'
                            }
                        ]
                    }
                },
                'durationStatistics': {
                    'count': 2,
                    'min': 'P284DT14H0M0S',
                    'max': 'P380DT0H0M0S',
                    'sum': 'P664DT14H0M0S',
                    'average': 'P332DT7H0M0S'
                }
            },
            'suspended': {
                'status': {
                    'valueCodeableConcept': {
                        'coding': [{
                                'system': 'http://hl7.org/fhir/care-plan-status',
                                'code': 'suspended'
                            }
                        ]
                    }
                },
                'durationStatistics': {
                    'count': 2,
                    'min': 'P5DT0H0M0S',
                    'max': 'P5DT0H0M0S',
                    'sum': 'P10DT0H0M0S',
                    'average': 'P5DT0H0M0S'
                }
            }
        }
    }
}

```
 |
| [Fetch careplans by patient](OperationDefinition--s-fetch-careplans-by-patient.md) | ### Report ContentsThis report contains the following resources:* EpisodeOfCare
* PlanDefinition
* CarePlan
* This report is grouped by EpisodeOfCare. Each group is returned in a separate JSon file.
* organization: Filter on EpisodeOfCare.managingOrganization match
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details


  { 'EHealthEpisodeOfCare': { 'resourceType': 'EpisodeOfCare', 'id': '30254', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/88873' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/66740' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/18637' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/16046' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } }, 'EHealthCarePlan': [{ 'resourceType': 'CarePlan', 'id': '1597', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan'] }, 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/59578' } ], 'status': 'draft', 'intent': 'option', 'category': [{ 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/careplan-category', 'code': 'TBD' } ] } ], 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/57779' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/30254' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'addresses': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/74721' } ], 'activity': [{ 'reference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/76916' } } ] } ], 'EHealthPlanDefinition': [{ 'resourceType': 'PlanDefinition', 'id': '59578', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role', 'extension': [{ 'url': 'reference', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41757' } }, { 'url': 'role', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/modifier-role', 'code': 'owner' } ] } } ] } ], 'version': 'c701b8e8-abe6-41bd-9db5-c05b94bc1e2b', 'status': 'active' } ], 'EHealthServiceRequest': [{ 'resourceType': 'ServiceRequest', 'id': '76916', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies', 'code': 'TBD' } ] } } ], 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/13593' } ], 'status': 'completed', 'intent': 'filler-order', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code', 'code': 'TBD' } ], 'text': '31d136f2-0b98-4e0a-8f82-f0731b54893d' }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/49397' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/72791' } } ] }
 |
| [Fetch careteam stats](OperationDefinition--s-fetch-careteam-stats.md) | ### Report ContentsThis report contains counts of resources associated with CareTeams:* EpisodeOfCare
* CarePlan
* This report is grouped by CareTeam. Each group is returned in a separate JSon file.
* organization: Filter on CareTeam.managingOrganization match
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.
 |
| [Fetch measurement stats](OperationDefinition--s-fetch-measurement-stats.md) | ### Report ContentsThis report contains counts of Measurements for each EpisodeOfCare:* Observation
* QuestionnaireResponse
* This report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.
* organization: Filter on EpisodeOfCare.managingOrganization match
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.
 |
| [Fetch patient GDPR](OperationDefinition--s-fetch-patient-gdpr.md) | ### Report ContentsThis report contains all information related to the specified Patient### GroupingNone. This report returns a single JSon file.### Parameters* organization: Filter on EpisodeOfCare.managingOrganization match
* period: not used.
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details


  { 'Patient': { 'resourceType': 'Patient', 'id': '70791', 'meta': { 'versionId': '1' } }, 'Communication': [{ 'resourceType': 'Communication', 'id': '29256', 'meta': { 'versionId': '1' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'RelatedPerson': [{ 'resourceType': 'RelatedPerson', 'id': '44196', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson'] }, 'identifier': [{ 'use': 'official', 'system': 'urn:oid:1.2.208.176.1.2', 'value': '2412001234' } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' }, 'name': [{ 'text': 'Tester' } ] } ], 'Appointment': [{ 'resourceType': 'Appointment', 'id': '74036', 'meta': { 'versionId': '1' }, 'participant': [{ 'id': '5fda865d-5e46-4fc4-8dcc-9b5f9a6b501a', 'actor': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' } } ] } ], 'AppointmentResponse': [{ 'resourceType': 'AppointmentResponse', 'id': '63226', 'meta': { 'versionId': '1' }, 'actor': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' } } ], 'EHealthEpisodeOfCare': [{ 'resourceType': 'EpisodeOfCare', 'id': '10928', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/43014' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/33654' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } }, { 'resourceType': 'EpisodeOfCare', 'id': '48392', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41282' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/87020' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47956' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } } ], 'EHealthDeviceUseStatement': [{ 'resourceType': 'DeviceUseStatement', 'id': '4021', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context', 'valueReference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/87235' } } ], 'status': 'active', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/69099' }, 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' } }, { 'resourceType': 'DeviceUseStatement', 'id': '5732', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context', 'valueReference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23385' } } ], 'status': 'active', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/10543' }, 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/91432' } } ], 'EHealthDevice': [{ 'resourceType': 'Device', 'id': '81729', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned', 'valueBoolean': true } ], 'status': 'active' }, { 'resourceType': 'Device', 'id': '91432', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned', 'valueBoolean': true } ], 'status': 'active' } ], 'EHealthDeviceMetric': [{ 'resourceType': 'DeviceMetric', 'id': '35094', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 5 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 10 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 12 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 14 } ] } ], 'identifier': { 'value': 'Foo' }, 'type': { 'text': 'code' }, 'source': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' }, 'category': 'calculation' }, { 'resourceType': 'DeviceMetric', 'id': '22449', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 5 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 10 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 12 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 14 } ] } ], 'identifier': { 'value': 'Foo' }, 'type': { 'text': 'code' }, 'source': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' }, 'category': 'calculation' } ], 'EHealthConsent': [{ 'resourceType': 'Consent', 'id': '51690', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent'] }, 'status': 'active', 'category': [{ 'coding': [{ 'code': 'TBD' } ] } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'consentingParty': [{ 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/41034' } ], 'actor': [{ 'id': 'f31bec27-965f-49ea-b8fe-5fdb259c539d', 'role': { 'coding': [{ 'code': 'authserver' } ] }, 'reference': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/60499' } } ], 'policyRule': 'Rule', 'data': [{ 'meaning': 'related', 'reference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/51427' } } ] } ], 'EHealthCarePlan': [{ 'resourceType': 'CarePlan', 'id': '87235', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan'] }, 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/98996' } ], 'status': 'draft', 'intent': 'option', 'category': [{ 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/careplan-category', 'code': 'TBD' } ] } ], 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/55953' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'addresses': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/25664' } ] }, { 'resourceType': 'CarePlan', 'id': '23385', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan'] }, 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/83648' } ], 'status': 'draft', 'intent': 'option', 'category': [{ 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/careplan-category', 'code': 'TBD' } ] } ], 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/51258' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'addresses': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/4845' } ] } ], 'EHealthServiceRequest': [{ 'resourceType': 'ServiceRequest', 'id': '18904', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies', 'code': 'TBD' } ] } } ], 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/64273' } ], 'status': 'completed', 'intent': 'filler-order', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code', 'code': 'TBD' } ], 'text': '7654414a-7f86-4170-9920-fde60368b58b' }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/59415' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthCondition': [{ 'resourceType': 'Condition', 'id': '22743', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition'] }, 'clinicalStatus': 'active', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/conditions', 'code': 'TBD' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/84730' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthObservation': [{ 'resourceType': 'Observation', 'id': '55832', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation'] }, 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/69506' } ], 'status': 'amended', 'code': { 'coding': [{ 'system': 'urn:oid:1.2.208.176.2.1', 'code': 'NPU03011' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/96798' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'effectivePeriod': { 'start': '2020-03-26T13:37:40+01:00', 'end': '2020-03-26T13:37:40+01:00' }, 'performer': [{ 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/43621' } ], 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/30416' } } ], 'EHealthQuestionnaireResponse': [{ 'resourceType': 'QuestionnaireResponse', 'id': '21957', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse'] }, 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/12403' } ], 'questionnaire': { 'reference': 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/42078' }, 'status': 'completed', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47155' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'authored': '2020-03-26T13:37:40+01:00', 'source': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/61666' } } ], 'EHealthMedia': [{ 'resourceType': 'Media', 'id': '18256', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-quality', 'extension': [{ 'url': 'qualityType', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/quality-types', 'code': 'TBD' } ] } }, { 'url': 'qualityCode', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/usage-quality', 'code': 'TBD' } ] } } ] } ], 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/98474' } ], 'type': 'audio', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/20886' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'occurrenceDateTime': '2020-03-26T13:37:40+01:00', 'content': { 'language': 'en' } } ], 'EHealthClinicalImpression': [{ 'resourceType': 'ClinicalImpression', 'id': '39697', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression'] }, 'status': 'draft', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/clinicalimpression-codes', 'code': 'TBD' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/32140' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthTask': [{ 'resourceType': 'Task', 'id': '96988', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/task-category', 'code': 'TBD' } ] } }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/restriction-category', 'code': 'None' } ] } }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-responsible', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Practitioner/74334' } } ], 'status': 'draft', 'intent': 'proposal', 'priority': 'routine', 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthCommunication': [{ 'resourceType': 'Communication', 'id': '29256', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication'] }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthProvenance': [{ 'resourceType': 'Provenance', 'id': '68399', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance'] }, 'target': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } ], 'recorded': '2020-03-26T13:37:39.772+01:00', 'policy': ['policy'], 'agent': [{ 'whoReference': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/6901' } } ] }, { 'resourceType': 'Provenance', 'id': '96195', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance'] }, 'target': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392' } ], 'recorded': '2020-03-26T13:37:39.801+01:00', 'policy': ['policy'], 'agent': [{ 'whoReference': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/45854' } } ] } ] }
 |
| [Fetch patient devices](OperationDefinition--s-fetch-patient-devices.md) | ### Report ContentsThis report contains Device information for each EpisodeOfCare:* Device
* DeviceUseStatement
* This report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.
* organization: Filter on EpisodeOfCare.managingOrganization match
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details


  { 'EHealthEpisodeOfCare': { 'resourceType': 'EpisodeOfCare', 'id': 'F417C17F9FDE24C9090BD629C8EE1697', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/313D8B0E0AC8EA8169D1DA45ECEEACB9' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/9A7FCD55CA3031585A8F1690DB1D8034' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/A1D94F323D8EF09E5D913D9522FD83C4' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/8DC75F2B12BCC832F92CC065C3D0B451' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } }, 'EHealthDeviceUseStatement': [{ 'resourceType': 'DeviceUseStatement', 'id': '9541E8EAEAD24376F208D5CD8A4D25F5', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context', 'valueReference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23D34B29DD02EB232B6575537FE8ADC5' } } ], 'status': 'active', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/AC38B1F6391F256002E5A7BE69CB2586' }, 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/08D51B81A7FE5B480278150A94D4048A' } } ], 'EHealthDevice': [{ 'resourceType': 'Device', 'id': '08D51B81A7FE5B480278150A94D4048A', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned', 'valueBoolean': true } ], 'status': 'active' } ], 'EHealthDeviceMetric': [{ 'resourceType': 'DeviceMetric', 'id': '7EA21ACD27EE012439F1440574A6BB21', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 5 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 10 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 12 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 14 } ] } ], 'identifier': { 'value': 'Foo' }, 'type': { 'text': 'code' }, 'source': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/08D51B81A7FE5B480278150A94D4048A' }, 'category': 'calculation' } ] }
 |
| [Fetch patient total](OperationDefinition--s-fetch-patient-total.md) | ### Report ContentsThis report contains clinical information for each Patient### GroupingThis report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.### Parameters* organization: Filter on EpisodeOfCare.managingOrganization match
* period: Filter on EpisodeOfCare.period overlap
* conditionCode: Filter on Condition.code related to EpisodeOfCare
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details


  { 'Patient': { 'resourceType': 'Patient', 'id': '70791', 'meta': { 'versionId': '1' } }, 'EHealthEpisodeOfCare': [{ 'resourceType': 'EpisodeOfCare', 'id': '10928', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/43014' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/33654' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } }, { 'resourceType': 'EpisodeOfCare', 'id': '48392', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41282' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/87020' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47956' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } } ], 'EHealthDeviceUseStatement': [{ 'resourceType': 'DeviceUseStatement', 'id': '4021', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context', 'valueReference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/87235' } } ], 'status': 'active', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/69099' }, 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' } }, { 'resourceType': 'DeviceUseStatement', 'id': '5732', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context', 'valueReference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23385' } } ], 'status': 'active', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/10543' }, 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/91432' } } ], 'EHealthDevice': [{ 'resourceType': 'Device', 'id': '81729', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned', 'valueBoolean': true } ], 'status': 'active' }, { 'resourceType': 'Device', 'id': '91432', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned', 'valueBoolean': true } ], 'status': 'active' } ], 'EHealthDeviceMetric': [{ 'resourceType': 'DeviceMetric', 'id': '35094', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 5 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 10 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 12 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 14 } ] } ], 'identifier': { 'value': 'Foo' }, 'type': { 'text': 'code' }, 'source': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' }, 'category': 'calculation' }, { 'resourceType': 'DeviceMetric', 'id': '22449', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 5 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 10 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 12 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 14 } ] } ], 'identifier': { 'value': 'Foo' }, 'type': { 'text': 'code' }, 'source': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' }, 'category': 'calculation' } ], 'EHealthConsent': [{ 'resourceType': 'Consent', 'id': '51690', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent'] }, 'status': 'active', 'category': [{ 'coding': [{ 'code': 'TBD' } ] } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'consentingParty': [{ 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/41034' } ], 'actor': [{ 'id': 'f31bec27-965f-49ea-b8fe-5fdb259c539d', 'role': { 'coding': [{ 'code': 'authserver' } ] }, 'reference': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/60499' } } ], 'policyRule': 'Rule', 'data': [{ 'meaning': 'related', 'reference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/51427' } } ] } ], 'EHealthCarePlan': [{ 'resourceType': 'CarePlan', 'id': '87235', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan'] }, 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/98996' } ], 'status': 'draft', 'intent': 'option', 'category': [{ 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/careplan-category', 'code': 'TBD' } ] } ], 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/55953' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'addresses': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/25664' } ] }, { 'resourceType': 'CarePlan', 'id': '23385', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan'] }, 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/83648' } ], 'status': 'draft', 'intent': 'option', 'category': [{ 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/careplan-category', 'code': 'TBD' } ] } ], 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/51258' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'addresses': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/4845' } ] } ], 'EHealthServiceRequest': [{ 'resourceType': 'ServiceRequest', 'id': '18904', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies', 'code': 'TBD' } ] } } ], 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/64273' } ], 'status': 'completed', 'intent': 'filler-order', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code', 'code': 'TBD' } ], 'text': '7654414a-7f86-4170-9920-fde60368b58b' }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/59415' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthCondition': [{ 'resourceType': 'Condition', 'id': '22743', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition'] }, 'clinicalStatus': 'active', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/conditions', 'code': 'TBD' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/84730' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthObservation': [{ 'resourceType': 'Observation', 'id': '55832', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation'] }, 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/69506' } ], 'status': 'amended', 'code': { 'coding': [{ 'system': 'urn:oid:1.2.208.176.2.1', 'code': 'NPU03011' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/96798' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'effectivePeriod': { 'start': '2020-03-26T13:37:40+01:00', 'end': '2020-03-26T13:37:40+01:00' }, 'performer': [{ 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/43621' } ], 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/30416' } } ], 'EHealthQuestionnaireResponse': [{ 'resourceType': 'QuestionnaireResponse', 'id': '21957', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse'] }, 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/12403' } ], 'questionnaire': { 'reference': 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/42078' }, 'status': 'completed', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47155' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'authored': '2020-03-26T13:37:40+01:00', 'source': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/61666' } } ], 'EHealthMedia': [{ 'resourceType': 'Media', 'id': '18256', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-quality', 'extension': [{ 'url': 'qualityType', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/quality-types', 'code': 'TBD' } ] } }, { 'url': 'qualityCode', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/usage-quality', 'code': 'TBD' } ] } } ] } ], 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/98474' } ], 'type': 'audio', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/20886' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'occurrenceDateTime': '2020-03-26T13:37:40+01:00', 'content': { 'language': 'en' } } ], 'EHealthClinicalImpression': [{ 'resourceType': 'ClinicalImpression', 'id': '39697', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression'] }, 'status': 'draft', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/clinicalimpression-codes', 'code': 'TBD' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/32140' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ] }
 |
| [Fetch practitioner GDPR](OperationDefinition--s-fetch-practitioner-gdpr.md) | ### Report ContentsThis report contains all information related to the specified Practitioner* Practitioner
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
 |
| [Fetch practitioner stats](OperationDefinition--s-fetch-practitioner-stats.md) | ### Report ContentsThis report contains counts of practitioners associated with Organizations and CareTeams* List of Organization and associated practitonerCount
* None. The report is returned in a single JSon file.
* organization: 
* CareTeam: Filter on CareTeam.ManagingOrganization match
* PractitionerRole: Filter on PractitionerRole.Organization match
 
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.
 |
| [Fetch questionnare responses](OperationDefinition--s-fetch-questionnaireresponses.md) | ### Report ContentsThis report contains a collection of questionnaire responses and related resources* Organizations
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
### OutputOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.### Example output### Output{ 'resourceType' : 'Bundle', 'id' : 'Questionnaire/44529', 'entry' : [ { 'fullUrl' : 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/24206/_history/1', 'resource' : { 'resourceType' : 'PlanDefinition', 'id' : '24206', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition' ] }, 'extension' : [ { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role', 'extension' : [ { 'url' : 'reference', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/14291' } }, { 'url' : 'role', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/modifier-role', 'code' : 'owner' } ] } } ] } ], 'version' : '1.0', 'status' : 'active', 'action' : [ { 'definitionCanonical' : 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/10919' } ] } }, { 'fullUrl' : 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/10919/_history/1', 'resource' : { 'resourceType' : 'ActivityDefinition', 'id' : '10919', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-activitydefinition' ] }, 'extension' : [ { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies', 'code' : 'noSharing' } ] } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role', 'extension' : [ { 'url' : 'reference', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/25403' } }, { 'url' : 'role', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/modifier-role', 'code' : 'owner' } ] } } ] } ], 'version' : '1.0', 'name' : '0ca879ed-678c-4439-aa4a-efc597f92dfb', 'status' : 'active', 'topic' : [ { 'coding' : [ { 'system' : 'http://terminology.hl7.org/CodeSystem/definition-topic', 'code' : 'treatment' } ] } ], 'relatedArtifact' : [ { 'type' : 'composed-of', 'resource' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529' } ], 'code' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/activitydefinition-code', 'code' : '273586006' } ] } } }, { 'fullUrl' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529/_history/1', 'resource' : { 'resourceType' : 'Questionnaire', 'id' : '44529', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire' ] }, 'extension' : [ { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-type', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/questionnaire-types', 'code' : 'QQ' } ] } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role', 'extension' : [ { 'url' : 'reference', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/24153' } }, { 'url' : 'role', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/modifier-role', 'code' : 'owner' } ] } } ] } ], 'version' : '1.0', 'name' : '090b990e-046a-4374-b7c6-b08613a41cce', 'status' : 'active' } }, { 'fullUrl' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/98618/_history/1', 'resource' : { 'resourceType' : 'Organization', 'id' : '98618', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization' ] }, 'extension' : [ { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-source', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/organization-source', 'code' : 'manual' } ] } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-synchronizationStatus', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/organization-synchronization-status', 'code' : 'NotSynchronized' } ] } } ], 'identifier' : [ { 'use' : 'official', 'system' : 'urn:oid:2.16.840.1.113883.2.24.1.1', 'value' : '11111111', 'period' : { 'start' : '2023-10-10T14:49:12+02:00' } } ], 'active' : false, 'name' : 'defaultTestFactory-be16f47b-1f8a-4440-a02e-23da1219b0ca', 'partOf' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/22124' } } }, { 'fullUrl' : 'https://organization.local.ehealth.sundhed.dk/fhir/CareTeam/87455/_history/1', 'resource' : { 'resourceType' : 'CareTeam', 'id' : '87455', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam' ] }, 'identifier' : [ { 'system' : 'urn:ietf:rfc:3986', 'value' : 'urn:uuid:9658ef5f-019a-4c90-9c41-f3ad14a31777' } ], 'status' : 'active', 'name' : '1b900db5-09dd-4563-b612-2b81201fab16', 'reasonCode' : [ { 'coding' : [ { 'system' : 'urn:oid:1.2.208.176.2.4', 'code' : 'DJ44' } ] } ] } }, { 'fullUrl' : 'https://measurement.local.ehealth.sundhed.dk/fhir/QuestionnaireResponse/92491/_history/1', 'resource' : { 'resourceType' : 'QuestionnaireResponse', 'id' : '92491', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse' ] }, 'extension' : [ { 'url' : 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare', 'valueReference' : { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/22208' } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing', 'extension' : [ { 'url' : 'serviceRequestVersionId', 'valueId' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439/_history/1' }, { 'url' : 'start', 'valueDateTime' : '2023-10-10T14:49:12+02:00' }, { 'url' : 'end', 'valueDateTime' : '2023-10-10T14:49:12+02:00' }, { 'url' : 'type', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/resolved-timing-type', 'code' : 'Resolved' } ] } } ] } ], 'basedOn' : [ { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439' } ], 'questionnaire' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529', 'status' : 'completed', 'subject' : { 'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/64465' }, 'authored' : '2023-10-10T14:49:12+02:00', 'source' : { 'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/75218' } } }, { 'fullUrl' : 'https://patient.local.ehealth.sundhed.dk/fhir/Communication/97180/_history/1', 'resource' : { 'resourceType' : 'Communication', 'id' : '97180', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication' ] }, 'extension' : [ { 'url' : 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare', 'valueReference' : { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/14233' } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/restriction-category', 'code' : 'None' } ] } } ], 'basedOn' : [ { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439' } ], 'status' : 'in-progress', 'category' : [ { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/communication-category', 'code' : 'annotation' } ] }, { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/message-category', 'code' : 'advice' } ] } ], 'subject' : { 'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/35194' }, 'topic' : { 'coding' : [ { 'system' : 'http://terminology.hl7.org/CodeSystem/communication-topic', 'code' : 'report-labs' } ] }, 'sent' : '2023-10-10T14:49:12+02:00', 'reasonCode' : [ { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/message-reasonCode', 'code' : 'ReminderSubmitMeasurement' } ] } ] } }, { 'fullUrl' : 'urn:uuid:57cfd6a7-dd43-4caa-8220-d50c77aebd8b', 'resource' : { 'resourceType' : 'Parameters', 'parameter' : [ { 'name' : 'serviceRequestResponseSummary', 'part' : [ { 'name' : 'serviceRequest', 'valueReference' : { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439' }, 'part' : [ { 'name' : 'condition', 'valueCoding' : { 'system' : 'urn:oid:1.2.208.176.2.4', 'code' : 'DJ44', 'display' : 'Kronisk obstruktiv lungesygdom' } }, { 'name' : 'episodeOfCareManagingOrganization', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/98618' } }, { 'name' : 'episodeOfCarePeriod', 'valuePeriod' : { 'start' : '1970-01-01T01:00:01+01:00', 'end' : '1970-01-01T01:01:40+01:00' } }, { 'name' : 'patientIdentifier', 'valueIdentifier' : { 'system' : 'urn:oid:1.2.208.176.1.2', 'value' : '0101010001' } }, { 'name' : 'statusHistory', 'part' : [ { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'draft' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-02T12:49:12+00:00', 'end' : '2023-10-03T12:49:12+00:00' } } ] }, { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'active' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-03T12:49:12+00:00', 'end' : '2023-10-04T12:49:12+00:00' } } ] }, { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'on-hold' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-04T12:49:12+00:00', 'end' : '2023-10-05T12:49:12+00:00' } } ] }, { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'active' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-05T12:49:12+00:00', 'end' : '2023-10-08T12:49:12+00:00' } } ] }, { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'on-hold' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-08T12:49:12+00:00' } } ] } ] }, { 'name' : 'involvedCareTeams', 'part' : [ { 'name' : 'careTeam', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/CareTeam/87455' } } ] }, { 'name' : 'responses', 'part' : [ { 'name' : 'response', 'part' : [ { 'name' : 'occurrence', 'part' : [ { 'name' : 'serviceRequestVersionId', 'valueId' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439/_history/1' }, { 'name' : 'start', 'valueDateTime' : '2023-10-10T14:49:12+02:00' }, { 'name' : 'end', 'valueDateTime' : '2023-10-10T14:49:12+02:00' }, { 'name' : 'type', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/resolved-timing-type', 'code' : 'Resolved' } ] } } ] }, { 'name' : 'questionnaireResponse', 'valueReference' : { 'reference' : 'https://measurement.local.ehealth.sundhed.dk/fhir/QuestionnaireResponse/92491' } }, { 'name' : 'submitted', 'valueDateTime' : '2023-10-10T12:49:12+00:00' } ] } ] }, { 'name' : 'communications', 'part' : [ { 'name' : 'communication', 'valueReference' : { 'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Communication/97180' } } ] } ] } ] } ] } } ] } |
| [Fetch ssl orders](OperationDefinition--s-fetch-ssl-orders.md) | ### Report ContentsThis report contains SSL Orders* OrderDetails
* OrderLines
* Order. Each Order is returned in a single JSon file.
* organization: Filter on Order.buyer
* period: Filter on TraceLine.timestamp
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are SSL resources. See the SSL API description for details


  { 'OrderDetails': { 'order': { 'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER', 'threadId': null, 'identifiers': null, 'status': null, 'priority': null, 'notes': null, 'buyer': 'https://ssl-order.local.ehealth.sundhed.dk/v1/party/BUYER', 'seller': 'https://ssl-order.local.ehealth.sundhed.dk/v1/party/SELLER', 'sellerDeliveryContactEmail': null, 'carePlanRef': null, 'carePlanTitle': null, 'earliestDeliveryDate': null, 'latestDeliveryDate': null, 'receiver': null }, 'orderLines': [{ 'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order-line/ORDERLINE', 'order': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER', 'status': null, 'item': null, 'agreedDate': null, 'device': null } ], 'traceLines': [{ 'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER/1', 'timestamp': '2019-12-24T18:00:00Z', 'createdByOrganization': null, 'createdByUser': null, 'text': null, 'supplementaryText': null, 'order': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER', 'orderLine': null, 'statusChange': null } ] } }
 |
| [Fetch unique active citizens total](OperationDefinition--s-fetch-patient-usage-stats.md) | ### Report ContentsThis report contains an overview of the number of unique active citizens with Episodes of Care, shown both on monthly and yearly basis.### GroupingThis report is grouped by months and years. All groups are contained in the same JSON file.### Parameters* Output can be found in Binary.content. This is a Base64 encoded .zip file containing a JSon file corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details First example is the monthly data:
{ 'PatientsUsageSummary': { 'monthData': [ { 'month': '1', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '2', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '3', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '4', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '5', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '6', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '7', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '8', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '9', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '10', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '11', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '12', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] } ] } }Second example is the yearly data:{ 'PatientsUsageSummary': { 'yearData': [ { 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 12, 'average': 1.0, 'usageBaseline': 10000, 'averageRounded': 1000.0, 'averageBeyondBaseline': 0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 12, 'average': 1.0, 'usageBaseline': 10000, 'averageRounded': 1000.0, 'averageBeyondBaseline': 0 } ] } ] } } |
| [Get Report Job Status](OperationDefinition--s-get-report-job-status.md) | ### Status ContentsThis operation returns status for reports scheduled by the user (by schedule or execute)### OutputThe output is a Bundle containing Parameters resources for each scheduled report. The parts of the Parameters describe the class of report, the parameters that the report was scheduled with, the user ID, the status of the report, a reference to the report Binary and time of creation, start, and end of execution.### Example output{ 'resourceType': 'Bundle', 'type': 'collection', 'entry': [ { 'fullUrl': 'ce35bcd5-4bb2-4c6e-b230-5347df1fe9bc', 'resource': { 'resourceType': 'Parameters', 'id': 'ce35bcd5-4bb2-4c6e-b230-5347df1fe9bc', 'parameter': [ { 'name': 'reportJob', 'part': [ { 'name': 'reportClass', 'valueString': 'com.systematic.ehealth.reporting.reports.PatientsUsageReport' }, { 'name': 'userId', 'valueString': '0aaca7cd-67c3-48dd-a8c4-0cceecb5d276' }, { 'name': 'status', 'valueString': 'DONE' }, { 'name': 'binary', 'valueReference': { 'reference': 'https://reporting.local.ehealth.sundhed.dk/fhir/Binary/7' } }, { 'name': 'parameters', 'resource': { 'resourceType': 'Parameters', 'parameter': [ { 'name': 'anonymization', 'valueString': 'None' } ] } }, { 'name': 'created', 'valueDateTime': '2023-10-12T09:51:50+00:00' }, { 'name': 'started', 'valueDateTime': '2023-10-12T09:51:50+00:00' }, { 'name': 'ended', 'valueDateTime': '2023-10-12T09:51:51+00:00' } ] } ] } } ] } |
| [Get media data](OperationDefinition-Media-t-get-data.md) | The get-data operation returns a media content matching the uuid provided.### Parameter description* uuid: The uuid of the media to return
### Request header description* ehealth-thumbnail-size: The size of thumbnail to return instead of original content. If thumbnails are not supported for the media, the original content is returned
### Output descriptionThe result of this operation returns a Binary containing the media found from the provided uuid |
| [Get organization information for a healthcare provider with provider number](OperationDefinition-Organization-t-get-general-practitioner-info.md) | The operation resolves the input organization(s) to the shared organization for the one or more organizations that have the given provider number. The Organization returned depends on how many active Organization exist in the service with that provider number. When a single Organization has the provider number that Organization is returned. When multiple Organization resources have the same provider number, the shared parent Organization is returned. An OperationOutcome with an explicit error is returned in case multiple organizations share the provider number but do not have a shared parent, or in case input organizations have different provider numbers. A typical use of the operation is to get name, address and telecom details for a general practitioner. Many provider numbers are assigned to a single organization but some provider numbers are shared by multiple entities (organizations) within in a common practice. |
| [Get patient procedures](OperationDefinition--s-get-patient-procedures.md) | This operation returns an overview of patient activities within a time period and filtered by either EpisodeOfCare or Condition code(s). On success, the returned Bundle contains a Parameters structure detailing the count of measurements received and expected. This is done per ServiceRequest with status active for those part of a CarePlan with status active related to eligible EpisodeOfCare resources. Eligible EpisodeOfCare are those with status active that refer to the given Patient and are either given as EpisodeOfCare reference in input or are referencing a Condition with a condition code that matches at least one of the Condition codes possibly given as input. The measurement regime expressed in ServiceRequest.occurrence[x] is, when possible, resolved to time slot(s) corresponding to datetime/period where an action is supposed to take place, typically performed by the Patient. When the occurrenceTiming variant is used, resolved time slots overlapping with the input time periode are considered. For occurrenceTiming expression which are either adhoc or unresolved, the effective datetime/period of a measurement is considered when checked for overlap with input time period.## Input The operation has three mandatory inputs, a Patient reference, a start date and an end date. Additionally the operation has three optional inputs: a list of reference(s) to EpisodeOfCare, a list of Codings for Condition and a list of Codings for tags.### Patient reference Mandatory reference for the Patient which the procedure overview is computed for.### Start and end datetimes Start and end datetime are both mandatory, and together specify the period of interest in the patient procedure overview. As stated above, for resolvable past and future time slots as well as adhoc and unresolved timings there must overlap with this period.### EpisodeOfCare list The list of EpisodeOfCare references is optional. If EpisodeOfCare are provided, these will be used to further filter which active EpisodeOfCare, CarePlan and ServiceRequest are considered for the patient procedure overview.### Condition Coding list The list of Coding for Condition is optional. If Condition Coding are provided, the EpisodeOfCare considered are those referring to a Condition matching at least one of the codes in the list. As above, the EpisodeOfCare (one or more) considered further determines which active EpisodeOfCare, CarePlan and ServiceRequest are considered.### Tag Coding list The list of Coding for tags is optional. If tag Coding are provided, the EpisodeOfCare considered are those including a tag matching at least one of the codes in the list. As above, both the Condition (one or more) and EpisodeOfCare (one or more) considered further determines which active EpisodeOfCare, CarePlan and ServiceRequest are considered.### Extra boolean This is an optional parameter that can be set to true if activities allowing 'Extra' submissions should be included in the response. Whether the ServiceRequest is included when Extra paremeter is set to true, is based on the ServiceRequest.includeAsExtra field.## Output For valid inputs, the server will compute and return a Bundle. The Bundle contains a Parameters resource with resolved measurement regimes and associated counts of measurement submitted and counts expected. Such counts are also included in the Parameters structure when the measurement regime is either adhoc or unresolved. In addition, the Bundle contains CarePlan and ServiceRequest referenced in the Parameters. The Bundle can contain an OperationOutcome describing any encountered warnings.### Output Parameters The output contains rows (encoded in parameters) for each matching and active ServiceRequest with resolved timings overlapping with the requested period. Rows are represented as Parameters.parameter with names: item_1, item_2, etc. Columns are represented as Parameters.parameter.part with name and value`&#xD; Example:&#xD; 'resource': {&#xD; 'resourceType': 'Parameters',&#xD; 'parameter': [{&#xD; 'name': 'item_1',&#xD; 'part': [{&#xD; 'name': 'CarePlan',&#xD; 'valueReference': {&#xD; 'reference': 'https://careplan.devtest.systematic-ehealth.com/fhir/CarePlan/164581'&#xD; }&#xD; }]&#xD; }]&#xD; }&#xD;`### Columns * CarePlan: Reference to the CarePlan that the ServiceRequest belongs to. 
* ServiceRequest: Reference to the ServiceRequest. 
* ServiceRequestVersionId: The version of the ServiceRequest (version specified at time of submit-measurement or the current version (for expected activities)). 
* Activity: Description of the planned activity. 
* ResolvedTimingStart: A planned start time for the activity in the requested period. 
* ResolvedTimingEnd: A planned end time for the activity in the requested period. May be identical to start if no duration is specified in the measurement regime. 
* TotalSubmitted: The number of measurements already submitted for this ServiceRequest and resolved timing. 
* SubmittedTimely: The number of measurements where the measurement time matches the resolved timing. 
* TimingType: 
* Resolved: a measurement regime that is supported by the infrastructure and where resolved timing and requested number of measurements can be calculated. 
* Unresolved: a measurement regime that is not supported by the infrastructure. Resolved Timing Start, end, submitted timely and Occurrences requested will be empty. 
* Adhoc: A ServiceRequest without a measurement regime or a measurement regime stating ad-hoc. 
* Extra: The service request may be performed outside the resolved timing. 
 
* OccurrencesRequested: Expected number of measurements. 
* TotalInvalidated: Number of measurements which are invalidated.
 |
| [Import a Plandefinition](OperationDefinition-PlanDefinition-t-import.md) | Import a Plandefinition### Parameters* Bundle containing the created resources. PlanDefinitions, ActivityDefinitions, and Questionnaires will be created. Imports QFFD DocumentReference into Document-Transformation service.Libraries and Organizations are used to find the corresponding resources on the target system.
 |
| [Import organizations](OperationDefinition--s-import-organizations.md) | Import a bundle containing at least one organization tree. |
| [Invalidate / Retract Invalidation of a Measurement](OperationDefinition-ClinicalImpression-t-set-measurement-validity.md) | This operation is used to invalidate or retract an invalidation of a Measurement.## Input The input parameter is a ClinicalImpression resource with the following values:* `status` - The status of the ClinicalImpression must be `completed`. 
* `investigation.item` - Versioned reference to the Measurement that is to be invalidated or retracted. 
* `investigation.item` - Unversioned reference to the Measurement that is to be invalidated or retracted. 
* `subject` - Reference to the Patient . 
* `episodeOfCare` - Reference to the EpisodeOfCare that the Measurement is part of. 
* `code` - Should use `MeasurementAssessment` from `http://ehealth.sundhed.dk/cs/clinicalimpression-codes`. 
* `finding.code` - The finding code must be `measurement-invalidated` or `measurement-invalidation-retracted`. 
* The operation returns the persisted ClinicalImpression: 
* `clinicalImpression` - The persisted ClinicalImpression resource with updated assessor values. 

## Operation side effects 

 
* The operation will update the status of the Measurement that is being invalidated or has the invalidation retracted to `entered-in-error` or `completed` respectively. 
* The operation will update the status to `entered-in-error` for any previous invalidation or invalidation retraction ClinicalImpression for the referenced Measurement, indicating that the previous ClinicalImpression is no longer used to represent the validity of the Measurement. The operation performs a search for any existing ClinicalImpression in the measurement validity cycle, and does not rely on/update the `previous` field on the input ClinicalImpression. If the input ClinicalImpression is for invalidation retraction, there must exist a ClinicalImpression invalidating the Measurement. 
* The operation will add an additional investigation with the code `item-modified`, referencing the Measurement version after the patch has been applied. 
* The operation will set assessor values (assessor, assessorOrganization and assessorOther). If the user is of type PRACTITIONER, assessor and assessorOrganization will be set. If the user is of type PATIENT, assessorOther will be set`.
 |
| [Is context allowed](OperationDefinition-EpisodeOfCare-i-is-context-allowed.md) | Checks that it is allowed to set an EpisodeOfCare as context. If the user requesting context is a patient, then the patient input parameter should be specified. If the user requesting context is a practitioner, then the careTeam input parameter should be specified. Throws an exception if it is not allowed to select the Episode Of Care context.## Output For valid Episode of Care is returned references that cause the Episode of Care to be valid context. For a practitioner, two output parameters will be returned on success:* CareTeam: The Careteam that gave access 
* EpisodeOfCare/CarePlan: The EpisodeOfCare or CarePlan that referenced the CareTeam
 |
| [Modify care team assignment](OperationDefinition-CarePlanEpisodeOfCare-i-update-care-teams.md) | The operation modifies the care team assignment of the care plan and all of its sub plans. |
| [Persist login](OperationDefinition--s-persist-login.md) | This operation persists login information into CareTeams and PractitionerRoles The following elements of each careteam are mandatory:* id: Reference based on the careteam from the saml security token
* status: any
* name: any
* reasonCode: any
* participant: 1 for each careteam-role in the saml security token – role: from the saml security token – member: reference to the practitioner – onBehalfOf: reference to organization (cannot be set currently because of a bug in hapi)
Persist-login will find each careteam, and update it with any new participants and roles from the input bundle. The input careteam resources are are used as a container for the participant list. The rest of the fields are not used. The following elements of each PractitionerRole are mandatory:* practitioner
* organization
* code: roles from the saml security token (CareteamParticipantRole valueset)
Persist-login will search for practitionerRoles for each combination of (practitioner, organization) and create it if it doesn't already exists. |
| [Person name lookup](OperationDefinition-ehealth-person-match.md) | This operation is used to lookup a citizen. It first attempts lookup on the service and, if a match is found, returns a Person resource with name, identifier, deceased-status and a link to the Patient resource. If not, it proceeds to find any prior CPR-numbers associated with the query CPR in the national infrastructure and checks if any of those match a patient on the service. If a match is found, it returns a Person resource with the same information. NOTE: This means that the returned patient can have a different identifier than the one used for request. If no match is found, it finds base information on the national infrastructure and returns a 'limited' Person resource containing only the identifier, name and deceased-state of the person. The operation is an implementation of[https://www.hl7.org/fhir/stu3/patient-operations.html#match](https://www.hl7.org/fhir/stu3/patient-operations.html#match)on the Person resource. |
| [Retrieve and transform APD document](OperationDefinition-Bundle-t-retrieve-and-transform-APD.md) | Retrieves a DK-HL7 Appointment (APD) XML document from national document sharing infrastructure and transforms the APD XML document to a FHIR Appointment (ehealth-appointment profile) resource.Input (url) is the element DocumentReference.content.attachment.url for metadata about the APD document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring. The preferred method is to call this operation without consent override and to only call with consent override when necessary.Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents. The value is logged in the Infrastructure.The returned FHIR Bundle contains a FHIR Appointment (ehealth-appointment profile) resource. |
| [Retrieve and transform PHMR document](OperationDefinition-Bundle-t-retrieve-and-transform-PHMR.md) | Retrieves a DK-HL7 Personal Health Monitoring Report (PHMR) XML document from national document sharing infrastructure and transforms the PHMR XML document to FHIR Observation (ehealth-observation profile) resources.Input (url) is the element DocumentReference.content.attachment.url for metadata about the PHMR document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring. The preferred method is to call this operation without consent override and to only call with consent override when necessary. Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents. The value is logged in the Infrastructure.The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing one or more FHIR Observation (ehealth-observation profile) resources and referenced resources such as FHIR Organization. |
| [Retrieve and transform QRD document](OperationDefinition-Bundle-t-retrieve-and-transform-QRD.md) | Retrieves a DK-HL7 Questionnaire Response Document (QRD) XML document from national document sharing infrastructure and transforms the QRD XML document to a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource.Input (url) is the element DocumentReference.content.attachment.url for metadata about the QRD document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (bundle) must contain a Questionnaire FHIR resource corresponding to the questionnaire definition (QFDD) that the QRD references and is a response to.Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring. The preferred method is to call this operation without consent override and to only call with consent override when necessary. Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents. The value is logged in the Infrastructure.The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse (ehealth-documentreference profile) resource, if the Questionnaire FHIR resource was provided as an input, and if the transformation was successful.If the Questionnaire FHIR resource was not provided as an input, or if the transformation was not successful, the returned FHIR Bundle contains the QRD XML document that was retrieved from the national document sharing infrastructure. |
| [Retrieve document](OperationDefinition-Binary-t-retrieve-document.md) | Input (url) is the element DocumentReference.content.attachment.url for metadata about the QRD/APD/PHMR document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring.The preferred method is to call this operation without consent override and to only call with consent override when necessary. Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents.The value is logged in the Infrastructure. |
| [Schedule careplan and episode of care stats](OperationDefinition--s-schedule-careplan-and-episode-of-care-stats.md) | ### Report ContentsThis report contains a count of active EpisodeOfCare and CarePlans.### GroupingThis report is grouped by ConditionCode. Each group is returned in a separate JSon file.### Parameters* organization: Filter on EpisodeOfCare.managingOrganization match
* period: Filter on CarePlan.period overlap
### OutputOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.### Example outputThe ConditionCode is a Fhir CodeableConcept. See the implementation guide for details```
{
    'ConditionCode': {
        'valueCodeableConcept': {
            'coding': [{
                    'system': 'urn:oid:1.2.208.176.2.4',
                    'code': 'DJ44'
                }
            ]
        }
    },
    'ConditionSummary': {
        'activeEpisodeOfCareCount': 1,
        'activeCarePlanCount': 1
    }
}

```
 |
| [Schedule careplan customization stats](OperationDefinition--s-schedule-careplan-customization-stats.md) | ### Report ContentsThis report contains a count of patient specific modifications of:* Measurement schedule timing
* This report is grouped by PlanDefinition. Each group is returned in a separate JSon file.
* organization: Filter on EpisodeOfCare.managingOrganization match
* period: Filter on CarePlan.period overlap
### OutputOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.### Example outputEHealthPlanDefinition is a Fhir resource. See the implementation guide for details```
{
    'EHealthPlanDefinition': {
        'resourceType': 'PlanDefinition',
        'id': '53450',
        'meta': {
            'versionId': '1',
            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']
        },
        'extension': [{
                'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',
                'extension': [{
                        'url': 'reference',
                        'valueReference': {
                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/85109'
                        }
                    }, {
                        'url': 'role',
                        'valueCodeableConcept': {
                            'coding': [{
                                    'system': 'http://ehealth.sundhed.dk/cs/modifier-role',
                                    'code': 'owner'
                                }
                            ]
                        }
                    }
                ]
            }
        ],
        'version': '97219ba1-2202-42a1-b99d-45de3a506b40',
        'status': 'active'
    },
    'CarePlanCustomizationSummary': {
        'timingCustomizationCount': 1,
        'referenceRangeCustomizationCount': 1
    }
}

```
 |
| [Schedule careplan duration stats](OperationDefinition--s-schedule-careplan-duration-stats.md) | ### Report ContentsThis report contains statistics on status changes for CarePlans:* count: Number of CarePlans in each state
* min: Shortest time spent in each state
* max: Longest time spent in each state
* sum: Sum of time spent in each state
* average: Average time spent in each state.
The durations are specified in[ISO 8601](https://www.digi.com/resources/documentation/digidocs/90001437-13/reference/r_iso_8601_duration_format.htm)format.### GroupingThis report is grouped by PlanDefinition. Each group is returned in a separate JSon file.### Parameters* organization: Filter on EpisodeOfCare.managingOrganization match
* period: Filter on CarePlan.period overlap
* condition: Filter on EpisodeOfCare condition match
### OutputOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.### Example outputEHealthPlanDefinition is a Fhir resource. See the implementation guide for details```
{
    'EHealthPlanDefinition': {
        'resourceType': 'PlanDefinition',
        'id': '257',
        'meta': {
            'versionId': '1',
            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']
        },
        'extension': [{
                'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',
                'extension': [{
                        'url': 'reference',
                        'valueReference': {
                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/73753'
                        }
                    }, {
                        'url': 'role',
                        'valueCodeableConcept': {
                            'coding': [{
                                    'system': 'http://ehealth.sundhed.dk/cs/modifier-role',
                                    'code': 'owner'
                                }
                            ]
                        }
                    }
                ]
            }
        ],
        'version': 'dc9ecd87-163f-4d2f-bdfe-434085eafe4f',
        'status': 'active'
    },
    'CarePlanStatusDurationSummary': {
        'statusDurationStatistics': {
            'draft': {
                'status': {
                    'valueCodeableConcept': {
                        'coding': [{
                                'system': 'http://hl7.org/fhir/care-plan-status',
                                'code': 'draft'
                            }
                        ]
                    }
                },
                'durationStatistics': {
                    'count': 2,
                    'min': 'P10DT10H0M0S',
                    'max': 'P15DT0H0M0S',
                    'sum': 'P25DT10H0M0S',
                    'average': 'P12DT17H0M0S'
                }
            },
            'active': {
                'status': {
                    'valueCodeableConcept': {
                        'coding': [{
                                'system': 'http://hl7.org/fhir/care-plan-status',
                                'code': 'active'
                            }
                        ]
                    }
                },
                'durationStatistics': {
                    'count': 2,
                    'min': 'P200DT0H0M0S',
                    'max': 'P200DT0H0M0S',
                    'sum': 'P400DT0H0M0S',
                    'average': 'P200DT0H0M0S'
                }
            },
            'completed': {
                'status': {
                    'valueCodeableConcept': {
                        'coding': [{
                                'system': 'http://hl7.org/fhir/care-plan-status',
                                'code': 'completed'
                            }
                        ]
                    }
                },
                'durationStatistics': {
                    'count': 2,
                    'min': 'P284DT14H0M0S',
                    'max': 'P380DT0H0M0S',
                    'sum': 'P664DT14H0M0S',
                    'average': 'P332DT7H0M0S'
                }
            },
            'suspended': {
                'status': {
                    'valueCodeableConcept': {
                        'coding': [{
                                'system': 'http://hl7.org/fhir/care-plan-status',
                                'code': 'suspended'
                            }
                        ]
                    }
                },
                'durationStatistics': {
                    'count': 2,
                    'min': 'P5DT0H0M0S',
                    'max': 'P5DT0H0M0S',
                    'sum': 'P10DT0H0M0S',
                    'average': 'P5DT0H0M0S'
                }
            }
        }
    }
}

```
 |
| [Schedule careplans-by patient](OperationDefinition--s-schedule-careplans-by-patient.md) | ### Report ContentsThis report contains the following resources:* EpisodeOfCare
* PlanDefinition
* CarePlan
* This report is grouped by EpisodeOfCare. Each group is returned in a separate JSon file.
* organization: Filter on EpisodeOfCare.managingOrganization match
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details


  { 'EHealthEpisodeOfCare': { 'resourceType': 'EpisodeOfCare', 'id': '30254', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/88873' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/66740' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/18637' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/16046' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } }, 'EHealthCarePlan': [{ 'resourceType': 'CarePlan', 'id': '1597', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan'] }, 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/59578' } ], 'status': 'draft', 'intent': 'option', 'category': [{ 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/careplan-category', 'code': 'TBD' } ] } ], 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/57779' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/30254' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'addresses': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/74721' } ], 'activity': [{ 'reference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/76916' } } ] } ], 'EHealthPlanDefinition': [{ 'resourceType': 'PlanDefinition', 'id': '59578', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role', 'extension': [{ 'url': 'reference', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41757' } }, { 'url': 'role', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/modifier-role', 'code': 'owner' } ] } } ] } ], 'version': 'c701b8e8-abe6-41bd-9db5-c05b94bc1e2b', 'status': 'active' } ], 'EHealthServiceRequest': [{ 'resourceType': 'ServiceRequest', 'id': '76916', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies', 'code': 'TBD' } ] } } ], 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/13593' } ], 'status': 'completed', 'intent': 'filler-order', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code', 'code': 'TBD' } ], 'text': '31d136f2-0b98-4e0a-8f82-f0731b54893d' }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/49397' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/72791' } } ] }
 |
| [Schedule careteam stats](OperationDefinition--s-schedule-careteam-stats.md) | ### Report ContentsThis report contains counts of resources associated with CareTeams:* EpisodeOfCare
* CarePlan
* This report is grouped by CareTeam. Each group is returned in a separate JSon file.
* organization: Filter on CareTeam.managingOrganization match
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.
 |
| [Schedule measurement stats](OperationDefinition--s-schedule-measurement-stats.md) | ### Report ContentsThis report contains counts of Measurements for each EpisodeOfCare:* Observation
* QuestionnaireResponse
* This report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.
* organization: Filter on EpisodeOfCare.managingOrganization match
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.
 |
| [Schedule patient GDPR](OperationDefinition--s-schedule-patient-gdpr.md) | ### Report ContentsThis report contains all information related to the specified Patient:### GroupingNone. This report returns a single JSon file.### Parameters* organization: Filter on EpisodeOfCare.managingOrganization match
* period: not used.
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details


  { 'Patient': { 'resourceType': 'Patient', 'id': '70791', 'meta': { 'versionId': '1' } }, 'Communication': [{ 'resourceType': 'Communication', 'id': '29256', 'meta': { 'versionId': '1' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'RelatedPerson': [{ 'resourceType': 'RelatedPerson', 'id': '44196', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson'] }, 'identifier': [{ 'use': 'official', 'system': 'urn:oid:1.2.208.176.1.2', 'value': '2412001234' } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' }, 'name': [{ 'text': 'Tester' } ] } ], 'Appointment': [{ 'resourceType': 'Appointment', 'id': '74036', 'meta': { 'versionId': '1' }, 'participant': [{ 'id': '5fda865d-5e46-4fc4-8dcc-9b5f9a6b501a', 'actor': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' } } ] } ], 'AppointmentResponse': [{ 'resourceType': 'AppointmentResponse', 'id': '63226', 'meta': { 'versionId': '1' }, 'actor': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' } } ], 'EHealthEpisodeOfCare': [{ 'resourceType': 'EpisodeOfCare', 'id': '10928', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/43014' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/33654' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } }, { 'resourceType': 'EpisodeOfCare', 'id': '48392', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41282' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/87020' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47956' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } } ], 'EHealthDeviceUseStatement': [{ 'resourceType': 'DeviceUseStatement', 'id': '4021', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context', 'valueReference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/87235' } } ], 'status': 'active', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/69099' }, 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' } }, { 'resourceType': 'DeviceUseStatement', 'id': '5732', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context', 'valueReference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23385' } } ], 'status': 'active', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/10543' }, 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/91432' } } ], 'EHealthDevice': [{ 'resourceType': 'Device', 'id': '81729', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned', 'valueBoolean': true } ], 'status': 'active' }, { 'resourceType': 'Device', 'id': '91432', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned', 'valueBoolean': true } ], 'status': 'active' } ], 'EHealthDeviceMetric': [{ 'resourceType': 'DeviceMetric', 'id': '35094', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 5 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 10 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 12 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 14 } ] } ], 'identifier': { 'value': 'Foo' }, 'type': { 'text': 'code' }, 'source': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' }, 'category': 'calculation' }, { 'resourceType': 'DeviceMetric', 'id': '22449', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 5 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 10 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 12 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 14 } ] } ], 'identifier': { 'value': 'Foo' }, 'type': { 'text': 'code' }, 'source': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' }, 'category': 'calculation' } ], 'EHealthConsent': [{ 'resourceType': 'Consent', 'id': '51690', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent'] }, 'status': 'active', 'category': [{ 'coding': [{ 'code': 'TBD' } ] } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'consentingParty': [{ 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/41034' } ], 'actor': [{ 'id': 'f31bec27-965f-49ea-b8fe-5fdb259c539d', 'role': { 'coding': [{ 'code': 'authserver' } ] }, 'reference': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/60499' } } ], 'policyRule': 'Rule', 'data': [{ 'meaning': 'related', 'reference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/51427' } } ] } ], 'EHealthCarePlan': [{ 'resourceType': 'CarePlan', 'id': '87235', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan'] }, 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/98996' } ], 'status': 'draft', 'intent': 'option', 'category': [{ 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/careplan-category', 'code': 'TBD' } ] } ], 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/55953' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'addresses': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/25664' } ] }, { 'resourceType': 'CarePlan', 'id': '23385', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan'] }, 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/83648' } ], 'status': 'draft', 'intent': 'option', 'category': [{ 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/careplan-category', 'code': 'TBD' } ] } ], 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/51258' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'addresses': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/4845' } ] } ], 'EHealthServiceRequest': [{ 'resourceType': 'ServiceRequest', 'id': '18904', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies', 'code': 'TBD' } ] } } ], 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/64273' } ], 'status': 'completed', 'intent': 'filler-order', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code', 'code': 'TBD' } ], 'text': '7654414a-7f86-4170-9920-fde60368b58b' }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/59415' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthCondition': [{ 'resourceType': 'Condition', 'id': '22743', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition'] }, 'clinicalStatus': 'active', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/conditions', 'code': 'TBD' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/84730' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthObservation': [{ 'resourceType': 'Observation', 'id': '55832', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation'] }, 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/69506' } ], 'status': 'amended', 'code': { 'coding': [{ 'system': 'urn:oid:1.2.208.176.2.1', 'code': 'NPU03011' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/96798' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'effectivePeriod': { 'start': '2020-03-26T13:37:40+01:00', 'end': '2020-03-26T13:37:40+01:00' }, 'performer': [{ 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/43621' } ], 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/30416' } } ], 'EHealthQuestionnaireResponse': [{ 'resourceType': 'QuestionnaireResponse', 'id': '21957', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse'] }, 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/12403' } ], 'questionnaire': { 'reference': 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/42078' }, 'status': 'completed', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47155' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'authored': '2020-03-26T13:37:40+01:00', 'source': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/61666' } } ], 'EHealthMedia': [{ 'resourceType': 'Media', 'id': '18256', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-quality', 'extension': [{ 'url': 'qualityType', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/quality-types', 'code': 'TBD' } ] } }, { 'url': 'qualityCode', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/usage-quality', 'code': 'TBD' } ] } } ] } ], 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/98474' } ], 'type': 'audio', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/20886' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'occurrenceDateTime': '2020-03-26T13:37:40+01:00', 'content': { 'language': 'en' } } ], 'EHealthClinicalImpression': [{ 'resourceType': 'ClinicalImpression', 'id': '39697', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression'] }, 'status': 'draft', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/clinicalimpression-codes', 'code': 'TBD' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/32140' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthTask': [{ 'resourceType': 'Task', 'id': '96988', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/task-category', 'code': 'TBD' } ] } }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/restriction-category', 'code': 'None' } ] } }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-responsible', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Practitioner/74334' } } ], 'status': 'draft', 'intent': 'proposal', 'priority': 'routine', 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthCommunication': [{ 'resourceType': 'Communication', 'id': '29256', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication'] }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthProvenance': [{ 'resourceType': 'Provenance', 'id': '68399', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance'] }, 'target': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } ], 'recorded': '2020-03-26T13:37:39.772+01:00', 'policy': ['policy'], 'agent': [{ 'whoReference': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/6901' } } ] }, { 'resourceType': 'Provenance', 'id': '96195', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance'] }, 'target': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392' } ], 'recorded': '2020-03-26T13:37:39.801+01:00', 'policy': ['policy'], 'agent': [{ 'whoReference': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/45854' } } ] } ] }
 |
| [Schedule patient devices](OperationDefinition--s-schedule-patient-devices.md) | ### Report ContentsThis report contains Device information for each EpisodeOfCare:* Device
* DeviceUseStatement
* This report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.
* organization: Filter on EpisodeOfCare.managingOrganization match
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details


  { 'EHealthEpisodeOfCare': { 'resourceType': 'EpisodeOfCare', 'id': 'F417C17F9FDE24C9090BD629C8EE1697', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/313D8B0E0AC8EA8169D1DA45ECEEACB9' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/9A7FCD55CA3031585A8F1690DB1D8034' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/A1D94F323D8EF09E5D913D9522FD83C4' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/8DC75F2B12BCC832F92CC065C3D0B451' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } }, 'EHealthDeviceUseStatement': [{ 'resourceType': 'DeviceUseStatement', 'id': '9541E8EAEAD24376F208D5CD8A4D25F5', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context', 'valueReference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23D34B29DD02EB232B6575537FE8ADC5' } } ], 'status': 'active', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/AC38B1F6391F256002E5A7BE69CB2586' }, 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/08D51B81A7FE5B480278150A94D4048A' } } ], 'EHealthDevice': [{ 'resourceType': 'Device', 'id': '08D51B81A7FE5B480278150A94D4048A', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned', 'valueBoolean': true } ], 'status': 'active' } ], 'EHealthDeviceMetric': [{ 'resourceType': 'DeviceMetric', 'id': '7EA21ACD27EE012439F1440574A6BB21', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 5 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 10 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 12 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 14 } ] } ], 'identifier': { 'value': 'Foo' }, 'type': { 'text': 'code' }, 'source': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/08D51B81A7FE5B480278150A94D4048A' }, 'category': 'calculation' } ] }
 |
| [Schedule patient total](OperationDefinition--s-schedule-patient-total.md) | ### Report ContentsThis report contains clinical information for each Patient### GroupingThis report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.### Parameters* organization: Filter on EpisodeOfCare.managingOrganization match
* period: Filter on EpisodeOfCare.period overlap
* conditionCode: Filter on Condition.code related to EpisodeOfCare
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details


  { 'Patient': { 'resourceType': 'Patient', 'id': '70791', 'meta': { 'versionId': '1' } }, 'EHealthEpisodeOfCare': [{ 'resourceType': 'EpisodeOfCare', 'id': '10928', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/43014' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/33654' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } }, { 'resourceType': 'EpisodeOfCare', 'id': '48392', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41282' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/87020' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47956' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } } ], 'EHealthDeviceUseStatement': [{ 'resourceType': 'DeviceUseStatement', 'id': '4021', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context', 'valueReference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/87235' } } ], 'status': 'active', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/69099' }, 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' } }, { 'resourceType': 'DeviceUseStatement', 'id': '5732', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context', 'valueReference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23385' } } ], 'status': 'active', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/10543' }, 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/91432' } } ], 'EHealthDevice': [{ 'resourceType': 'Device', 'id': '81729', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned', 'valueBoolean': true } ], 'status': 'active' }, { 'resourceType': 'Device', 'id': '91432', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned', 'valueBoolean': true } ], 'status': 'active' } ], 'EHealthDeviceMetric': [{ 'resourceType': 'DeviceMetric', 'id': '35094', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 5 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 10 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 12 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 14 } ] } ], 'identifier': { 'value': 'Foo' }, 'type': { 'text': 'code' }, 'source': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' }, 'category': 'calculation' }, { 'resourceType': 'DeviceMetric', 'id': '22449', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 5 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 10 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 12 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 14 } ] } ], 'identifier': { 'value': 'Foo' }, 'type': { 'text': 'code' }, 'source': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729' }, 'category': 'calculation' } ], 'EHealthConsent': [{ 'resourceType': 'Consent', 'id': '51690', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent'] }, 'status': 'active', 'category': [{ 'coding': [{ 'code': 'TBD' } ] } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'consentingParty': [{ 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/41034' } ], 'actor': [{ 'id': 'f31bec27-965f-49ea-b8fe-5fdb259c539d', 'role': { 'coding': [{ 'code': 'authserver' } ] }, 'reference': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/60499' } } ], 'policyRule': 'Rule', 'data': [{ 'meaning': 'related', 'reference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/51427' } } ] } ], 'EHealthCarePlan': [{ 'resourceType': 'CarePlan', 'id': '87235', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan'] }, 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/98996' } ], 'status': 'draft', 'intent': 'option', 'category': [{ 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/careplan-category', 'code': 'TBD' } ] } ], 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/55953' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'addresses': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/25664' } ] }, { 'resourceType': 'CarePlan', 'id': '23385', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan'] }, 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/83648' } ], 'status': 'draft', 'intent': 'option', 'category': [{ 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/careplan-category', 'code': 'TBD' } ] } ], 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/51258' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'addresses': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/4845' } ] } ], 'EHealthServiceRequest': [{ 'resourceType': 'ServiceRequest', 'id': '18904', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies', 'code': 'TBD' } ] } } ], 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/64273' } ], 'status': 'completed', 'intent': 'filler-order', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code', 'code': 'TBD' } ], 'text': '7654414a-7f86-4170-9920-fde60368b58b' }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/59415' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthCondition': [{ 'resourceType': 'Condition', 'id': '22743', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition'] }, 'clinicalStatus': 'active', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/conditions', 'code': 'TBD' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/84730' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ], 'EHealthObservation': [{ 'resourceType': 'Observation', 'id': '55832', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation'] }, 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/69506' } ], 'status': 'amended', 'code': { 'coding': [{ 'system': 'urn:oid:1.2.208.176.2.1', 'code': 'NPU03011' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/96798' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'effectivePeriod': { 'start': '2020-03-26T13:37:40+01:00', 'end': '2020-03-26T13:37:40+01:00' }, 'performer': [{ 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/43621' } ], 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/30416' } } ], 'EHealthQuestionnaireResponse': [{ 'resourceType': 'QuestionnaireResponse', 'id': '21957', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse'] }, 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/12403' } ], 'questionnaire': { 'reference': 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/42078' }, 'status': 'completed', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47155' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'authored': '2020-03-26T13:37:40+01:00', 'source': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/61666' } } ], 'EHealthMedia': [{ 'resourceType': 'Media', 'id': '18256', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-quality', 'extension': [{ 'url': 'qualityType', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/quality-types', 'code': 'TBD' } ] } }, { 'url': 'qualityCode', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/usage-quality', 'code': 'TBD' } ] } } ] } ], 'basedOn': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/98474' } ], 'type': 'audio', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/20886' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' }, 'occurrenceDateTime': '2020-03-26T13:37:40+01:00', 'content': { 'language': 'en' } } ], 'EHealthClinicalImpression': [{ 'resourceType': 'ClinicalImpression', 'id': '39697', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression'] }, 'status': 'draft', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/clinicalimpression-codes', 'code': 'TBD' } ] }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/32140' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928' } } ] }
 |
| [Schedule patient usage statistics](OperationDefinition--s-schedule-patient-usage-stats.md) | ### Report ContentsThis report contains an overview of the number of unique active citizens with Episodes of Care, shown both on monthly and yearly basis.### GroupingThis report is grouped by months and years. All groups are contained in the same JSON file.### Parameters* Output can be found in Binary.content. This is a Base64 encoded .zip file containing a JSon file corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details First example is the monthly data:
{ 'PatientsUsageSummary': { 'monthData': [ { 'month': '1', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '2', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '3', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '4', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '5', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '6', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '7', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '8', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '9', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '10', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '11', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '12', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] } ] } }Second example is the yearly data:{ 'PatientsUsageSummary': { 'yearData': [ { 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 12, 'average': 1.0, 'usageBaseline': 10000, 'averageRounded': 1000.0, 'averageBeyondBaseline': 0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 12, 'average': 1.0, 'usageBaseline': 10000, 'averageRounded': 1000.0, 'averageBeyondBaseline': 0 } ] } ] } } |
| [Schedule practitioner GDPR](OperationDefinition--s-schedule-practitioner-gdpr.md) | ### Report ContentsThis report contains all information related to the specified Practitioner* Practitioner
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
 |
| [Schedule practitioner stats](OperationDefinition--s-schedule-practitioner-stats.md) | ### Report ContentsThis report contains counts of practitioners associated with Organizations and CareTeams* List of Organization and associated practitonerCount
* None. The report is returned in a single JSon file.
* organization: 
* CareTeam: Filter on CareTeam.ManagingOrganization match
* PractitionerRole: Filter on PractitionerRole.Organization match
 
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.
 |
| [Schedule questionnare responses](OperationDefinition--s-schedule-questionnaireresponses.md) | ### Report ContentsThis report contains a collection of questionnaire responses and related resources* Organizations
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
### OutputOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.### Example output### Output{ 'resourceType' : 'Bundle', 'id' : 'Questionnaire/44529', 'entry' : [ { 'fullUrl' : 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/24206/_history/1', 'resource' : { 'resourceType' : 'PlanDefinition', 'id' : '24206', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition' ] }, 'extension' : [ { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role', 'extension' : [ { 'url' : 'reference', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/14291' } }, { 'url' : 'role', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/modifier-role', 'code' : 'owner' } ] } } ] } ], 'version' : '1.0', 'status' : 'active', 'action' : [ { 'definitionCanonical' : 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/10919' } ] } }, { 'fullUrl' : 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/10919/_history/1', 'resource' : { 'resourceType' : 'ActivityDefinition', 'id' : '10919', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-activitydefinition' ] }, 'extension' : [ { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies', 'code' : 'noSharing' } ] } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role', 'extension' : [ { 'url' : 'reference', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/25403' } }, { 'url' : 'role', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/modifier-role', 'code' : 'owner' } ] } } ] } ], 'version' : '1.0', 'name' : '0ca879ed-678c-4439-aa4a-efc597f92dfb', 'status' : 'active', 'topic' : [ { 'coding' : [ { 'system' : 'http://terminology.hl7.org/CodeSystem/definition-topic', 'code' : 'treatment' } ] } ], 'relatedArtifact' : [ { 'type' : 'composed-of', 'resource' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529' } ], 'code' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/activitydefinition-code', 'code' : '273586006' } ] } } }, { 'fullUrl' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529/_history/1', 'resource' : { 'resourceType' : 'Questionnaire', 'id' : '44529', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire' ] }, 'extension' : [ { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-type', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/questionnaire-types', 'code' : 'QQ' } ] } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role', 'extension' : [ { 'url' : 'reference', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/24153' } }, { 'url' : 'role', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/modifier-role', 'code' : 'owner' } ] } } ] } ], 'version' : '1.0', 'name' : '090b990e-046a-4374-b7c6-b08613a41cce', 'status' : 'active' } }, { 'fullUrl' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/98618/_history/1', 'resource' : { 'resourceType' : 'Organization', 'id' : '98618', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization' ] }, 'extension' : [ { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-source', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/organization-source', 'code' : 'manual' } ] } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-synchronizationStatus', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/organization-synchronization-status', 'code' : 'NotSynchronized' } ] } } ], 'identifier' : [ { 'use' : 'official', 'system' : 'urn:oid:2.16.840.1.113883.2.24.1.1', 'value' : '11111111', 'period' : { 'start' : '2023-10-10T14:49:12+02:00' } } ], 'active' : false, 'name' : 'defaultTestFactory-be16f47b-1f8a-4440-a02e-23da1219b0ca', 'partOf' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/22124' } } }, { 'fullUrl' : 'https://organization.local.ehealth.sundhed.dk/fhir/CareTeam/87455/_history/1', 'resource' : { 'resourceType' : 'CareTeam', 'id' : '87455', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam' ] }, 'identifier' : [ { 'system' : 'urn:ietf:rfc:3986', 'value' : 'urn:uuid:9658ef5f-019a-4c90-9c41-f3ad14a31777' } ], 'status' : 'active', 'name' : '1b900db5-09dd-4563-b612-2b81201fab16', 'reasonCode' : [ { 'coding' : [ { 'system' : 'urn:oid:1.2.208.176.2.4', 'code' : 'DJ44' } ] } ] } }, { 'fullUrl' : 'https://measurement.local.ehealth.sundhed.dk/fhir/QuestionnaireResponse/92491/_history/1', 'resource' : { 'resourceType' : 'QuestionnaireResponse', 'id' : '92491', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse' ] }, 'extension' : [ { 'url' : 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare', 'valueReference' : { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/22208' } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing', 'extension' : [ { 'url' : 'serviceRequestVersionId', 'valueId' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439/_history/1' }, { 'url' : 'start', 'valueDateTime' : '2023-10-10T14:49:12+02:00' }, { 'url' : 'end', 'valueDateTime' : '2023-10-10T14:49:12+02:00' }, { 'url' : 'type', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/resolved-timing-type', 'code' : 'Resolved' } ] } } ] } ], 'basedOn' : [ { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439' } ], 'questionnaire' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529', 'status' : 'completed', 'subject' : { 'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/64465' }, 'authored' : '2023-10-10T14:49:12+02:00', 'source' : { 'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/75218' } } }, { 'fullUrl' : 'https://patient.local.ehealth.sundhed.dk/fhir/Communication/97180/_history/1', 'resource' : { 'resourceType' : 'Communication', 'id' : '97180', 'meta' : { 'versionId' : '1', 'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication' ] }, 'extension' : [ { 'url' : 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare', 'valueReference' : { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/14233' } }, { 'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/restriction-category', 'code' : 'None' } ] } } ], 'basedOn' : [ { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439' } ], 'status' : 'in-progress', 'category' : [ { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/communication-category', 'code' : 'annotation' } ] }, { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/message-category', 'code' : 'advice' } ] } ], 'subject' : { 'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/35194' }, 'topic' : { 'coding' : [ { 'system' : 'http://terminology.hl7.org/CodeSystem/communication-topic', 'code' : 'report-labs' } ] }, 'sent' : '2023-10-10T14:49:12+02:00', 'reasonCode' : [ { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/message-reasonCode', 'code' : 'ReminderSubmitMeasurement' } ] } ] } }, { 'fullUrl' : 'urn:uuid:57cfd6a7-dd43-4caa-8220-d50c77aebd8b', 'resource' : { 'resourceType' : 'Parameters', 'parameter' : [ { 'name' : 'serviceRequestResponseSummary', 'part' : [ { 'name' : 'serviceRequest', 'valueReference' : { 'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439' }, 'part' : [ { 'name' : 'condition', 'valueCoding' : { 'system' : 'urn:oid:1.2.208.176.2.4', 'code' : 'DJ44', 'display' : 'Kronisk obstruktiv lungesygdom' } }, { 'name' : 'episodeOfCareManagingOrganization', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/98618' } }, { 'name' : 'episodeOfCarePeriod', 'valuePeriod' : { 'start' : '1970-01-01T01:00:01+01:00', 'end' : '1970-01-01T01:01:40+01:00' } }, { 'name' : 'patientIdentifier', 'valueIdentifier' : { 'system' : 'urn:oid:1.2.208.176.1.2', 'value' : '0101010001' } }, { 'name' : 'statusHistory', 'part' : [ { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'draft' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-02T12:49:12+00:00', 'end' : '2023-10-03T12:49:12+00:00' } } ] }, { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'active' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-03T12:49:12+00:00', 'end' : '2023-10-04T12:49:12+00:00' } } ] }, { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'on-hold' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-04T12:49:12+00:00', 'end' : '2023-10-05T12:49:12+00:00' } } ] }, { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'active' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-05T12:49:12+00:00', 'end' : '2023-10-08T12:49:12+00:00' } } ] }, { 'name' : 'statusPeriod', 'part' : [ { 'name' : 'status', 'valueCoding' : { 'system' : 'http://hl7.org/fhir/request-status', 'code' : 'on-hold' } }, { 'name' : 'period', 'valuePeriod' : { 'start' : '2023-10-08T12:49:12+00:00' } } ] } ] }, { 'name' : 'involvedCareTeams', 'part' : [ { 'name' : 'careTeam', 'valueReference' : { 'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/CareTeam/87455' } } ] }, { 'name' : 'responses', 'part' : [ { 'name' : 'response', 'part' : [ { 'name' : 'occurrence', 'part' : [ { 'name' : 'serviceRequestVersionId', 'valueId' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439/_history/1' }, { 'name' : 'start', 'valueDateTime' : '2023-10-10T14:49:12+02:00' }, { 'name' : 'end', 'valueDateTime' : '2023-10-10T14:49:12+02:00' }, { 'name' : 'type', 'valueCodeableConcept' : { 'coding' : [ { 'system' : 'http://ehealth.sundhed.dk/cs/resolved-timing-type', 'code' : 'Resolved' } ] } } ] }, { 'name' : 'questionnaireResponse', 'valueReference' : { 'reference' : 'https://measurement.local.ehealth.sundhed.dk/fhir/QuestionnaireResponse/92491' } }, { 'name' : 'submitted', 'valueDateTime' : '2023-10-10T12:49:12+00:00' } ] } ] }, { 'name' : 'communications', 'part' : [ { 'name' : 'communication', 'valueReference' : { 'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Communication/97180' } } ] } ] } ] } ] } } ] } |
| [Schedule ssl orders](OperationDefinition--s-schedule-ssl-orders.md) | ### Report ContentsThis report contains SSL Orders* OrderDetails
* OrderLines
* Order. Each Order is returned in a single JSon file.
* organization: Filter on Order.buyer
* period: Filter on TraceLine.timestamp
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are SSL resources. See the SSL API description for details


  { 'OrderDetails': { 'order': { 'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER', 'threadId': null, 'identifiers': null, 'status': null, 'priority': null, 'notes': null, 'buyer': 'https://ssl-order.local.ehealth.sundhed.dk/v1/party/BUYER', 'seller': 'https://ssl-order.local.ehealth.sundhed.dk/v1/party/SELLER', 'sellerDeliveryContactEmail': null, 'carePlanRef': null, 'carePlanTitle': null, 'earliestDeliveryDate': null, 'latestDeliveryDate': null, 'receiver': null }, 'orderLines': [{ 'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order-line/ORDERLINE', 'order': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER', 'status': null, 'item': null, 'agreedDate': null, 'device': null } ], 'traceLines': [{ 'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER/1', 'timestamp': '2019-12-24T18:00:00Z', 'createdByOrganization': null, 'createdByUser': null, 'text': null, 'supplementaryText': null, 'order': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER', 'orderLine': null, 'statusChange': null } ] } }
 |
| [Search measurements](OperationDefinition--s-search-measurements.md) | The search-measurements operation searches for bundles of related resources having Observations, Media or QuestionnaireResponses matching the search criteria.### Parameter description* patient: Find resource(s) referring the specified patient - Reference(eHealth Patient).
* episodeOfCare: Find resource(s) referring the specified episode of care - Reference(eHealth EpisodeOfCare).
*  

| | |
| :--- | :--- |
| device: Find resource(s) referring the specified device - Reference(eHealth Device | eHealth DeviceMetric). |

 
* period: Resource(s) must have either an instant or time period within or overlapping the given period. The used instant/time period varies with resource as follows: Element effective for eHealth Observation; Element authored for eHealth QuestionnaireResponse; Element occurrence for eHealth Media.
* based-on: Resources(s) must be based on any of the specified procedure requests - Reference(eHealth ServiceRequest).
*  

| | |
| :--- | :--- |
| _tag: When specified, resource(s) must have at least one of the specified tags in meta data - for instance a Coding(ehealth-system CodeSystem) or on token form: http://ehealth.sundhed.dk/cs/ehealth-system | xa. Note that the _tag functions as an optional filter, not as a selection criteria in the way the other parameters work. |

 
"period" must always be specified.Additionally at least "patient" or "episodeOfCare" must be specified.### Output descriptionThe result of this operation will return a Bundle with a list of nested Bundles having resources matching the search parameters.Each of the nested bundles will contain the full set of related eHealth Observation, eHealth Media, eHealth QuestionnaireResponse and eHealth Provenance resources.If a eHealth QuestionnaireResponse is part of the nested bundle the referenced eHealth Questionnaire will also be included in the nested bundle.Related resources are the set of resources created by a single invocation of the submit-measurement operation. |
| [Search measurements bundle limit](OperationDefinition--s-search-measurements-bundle-limit.md) | The search-measurements-bundle-limit operation searches for a number of bundles of related resources having Observations, Media or QuestionnaireResponses matching the search criteria.### Parameter description* patient: Find resource(s) referring the specified patient - Reference(eHealth Patient).
* episodeOfCare: Find resource(s) referring the specified episode of care - Reference(eHealth EpisodeOfCare).
* count: The number of bundles to return, max allowed value is 100 - Integer.
* start: Based on the effective time of measurement, please see <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-observation-definitions.html#key_Observation.effective[x]'>Observation.effective[x]</a> , <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-questionnaireresponse.html#effective-period'>QuestionnaireResponse.effective-period</a> , and <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-media-definitions.html#key_Media.created[x]'>Media.created[x]</a>. If QuestionnaireResponse.effectivePeriod is missing, authored is used instead. If provided, the operation will search for observation, media and QuestionnaireResponse resource(s) with a clinical effective time after this time. The result bundles will be sorted in ascending order - DateTime.
* end: Based on the effective time of measurement, please see <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-observation-definitions.html#key_Observation.effective[x]'>Observation.effective[x]</a> , <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-questionnaireresponse.html#effective-period'>QuestionnaireResponse.effective-period</a> , and <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-media-definitions.html#key_Media.created[x]'>Media.created[x]</a>. If QuestionnaireResponse.effectivePeriod is missing, authored is used instead. If provided, the operation will search for observation, media and QuestionnaireResponse resource(s) with a clinical effective time before this time. The result bundles will be sorted in descending order - DateTime.
* based-on: Resources(s) must be based on any of the specified service requests - Reference(eHealth ServiceRequest).
*  

| | |
| :--- | :--- |
| _tag: When specified, resource(s) must have at least one of the specified tags in meta data - for instance a Coding(ehealth-system CodeSystem) or on token form: http://ehealth.sundhed.dk/cs/ehealth-system | xa. Note that the _tag functions as an optional filter, not as a selection criteria in the way the other parameters work. |

 
One of either "start" or "end", along with the "count" parameter must always be specified.Additionally at least "patient" or "episodeOfCare" or "based-on" must be specified.### Output descriptionThe result of this operation returns a Bundle with a list of nested Bundles having resources matching the search parameters. The number of nested Bundles depends on the count parameter.Each of the nested bundles contains the full set of related eHealth Observation, eHealth Media, eHealth QuestionnaireResponse and eHealth Provenance resources, from the same submission request.Related resources are the set of resources created by a single invocation of the submit-measurement operation. |
| [Submit measurement](OperationDefinition--s-submit-measurement.md) | The submit-measurement operation provides a single measurement in the form of a Bundle of Observation, QuestionnaireResponse and Media for storage and, subsequently, further processing in the eHealth Infrastructure. A Provenance resource is implicitly created by the infrastructure referencing input Bundle resources as target, thereby relating the resources that were submitted.Media resource inline content in`content.data`will be stored outside the resource, and the`content.url`for retrieval is set on the resource. Image content is anonymized by removing sensitive metadate before storage. Image content is processed to generate thumbnail representations in the thumbnail element.### Parameter descriptionmeasurement: Bundle containing:* 0..* Observation (ehealth-observation profile)
* 0..* QuestionnaireResponse (ehealth-questionnaireresponse profile)
* 0..* Media (ehealth-media profile)
* 0..* Provenance (ehealth-provenance profile). Each Provenance (which is intended for capturing reuse of measurement(s) – as described in the eHealth Observation profile introduction) must refer to other resources in the Bundle as target in the format "urn:oid:<the oid>" or "urn:uuid:<the uuid>.".
All resources in the Bundle must refer to the same Patient and EpisodeOfCare. All measurement resources in the Bundle must have status either`completed`or`final`(`completed`in case of Media/QuestionnaireResponse and`final`in case of Observation). All resources in the Bundle as well as the created Provenance will receive any missing system tags (ehealth-system CodeSystem) provided by the referenced EpisodeOfCare. The request will be denied if any resource in the Bundle contains a system tag, which is not present on the referenced EpisodeOfCare### Output descriptionThe returned Bundle contains references to the stored input resources where the id has been substituted.eHealth infrastructure will substitute the id when saving the resources in a single transaction. |
| [Suggest care teams](OperationDefinition-CarePlan-i-suggest-care-teams.md) | Suggest care teams matching the conditions required by the care plan on either a regional or a municipality level. The suggested care teams has reason codes matching all the conditions addressed by the care plan and has a managing organization matching the input region code or municipality code. One of region code or municipality code must be input. If both region code and municipality code is input, then the municipality code is ignored. Return a bundle with matching care teams and their managing organizations. |
| [Transform from APD](OperationDefinition--s-transform-from-APD.md) | Transforms a DK-HL7 Appointment Document (APD) XML document to a FHIR Appointment (ehealth-appointment profile) resource. The input FHIR DocumentReference (ehealth-documentreference profile) contains the APD XML document. The caller must ensure that the APD XML document is valid and adheres to the DK-HL7 Appointment Document profile. The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing a FHIR Appointment (ehealth-appointment profile) resource. |
| [Transform from PHMR](OperationDefinition--s-transform-from-PHMR.md) | Transforms a DK-HL7 Personal Health Monitoring Report (PHMR) XML document to FHIR Observation (ehealth-observation profile) resource. The input FHIR DocumentReference contains the PHMR XML document adhering to the DK-HL7 Personal Health Monitoring Report profile The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing.one or more FHIR Observation (ehealth-observation profile) resources and referenced resources such as FHIR Organization. |
| [Transform from QFDD](OperationDefinition--s-transform-from-QFDD.md) | Transforms the DK-HL7 Questionnaire Form Definition Document (QFDD) to an eHealth Questionnaire resource. The input FHIR DocumentReference contains QFDD XML for the DK-HL7 Questionnaire Form Definition Document. The returned Bundle contains the eHealth Questionnaire and Composition resource which reference the returned eHealth Questionnaire. |
| [Transform from QRD](OperationDefinition--s-transform-from-QRD.md) | Transforms a DK-HL7 Questionnaire Response Document (QRD) XML document to a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource. The input FHIR DocumentReference contains the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile. The returned FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse (ehealth-documentreference profile) resource. |
| [Transform from QRD based on FHIR Questionnaire](OperationDefinition--s-transform-from-QRD-based-on-questionnaire.md) | Transforms a DK-HL7 Questionnaire Response Document (QRD) XML document to a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource. The input bundle must contain the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile. And a FHIR Questionnaire resource. The returned FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse (ehealth-documentreference profile) resource. |
| [Transform to APD](OperationDefinition--s-transform-to-APD.md) | Transforms a FHIR Appointment (ehealth-appointment profile) resource to a DK-HL7 Appointment Document (APD) XML document. The input FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing a FHIR Appointment (ehealth-appointment profile) resource and referenced resources such as FHIR Organization. The returned FHIR DocumentReference contains the APD XML document adhering to the DK-HL7 Appointment Document profile. |
| [Transform to PHMR](OperationDefinition--s-transform-to-PHMR.md) | Transforms a FHIR Observation (ehealth-observation profile) resource to a DK-HL7 Personal Health Monitoring Report (PHMR) XML document. The input FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing one or more FHIR Observation (ehealth-observation profile) resources and referenced resources such as FHIR Organization. The returned FHIR DocumentReference contains the PHMR XML document adhering to the DK-HL7 Personal Health Monitoring Report profile. |
| [Transform to QFDD](OperationDefinition--s-transform-to-QFDD.md) | Transforms an eHealth Questionnaire resource to the DK-HL7 Questionnaire Form Definition Document (QFDD). The input Bundle contains an eHealth Questionnaire and Composition resource which reference the returned eHealth Questionnaire. The returned Bundle in case of no validation errors contains the FHIR DocumentReference containing the QFDD XML for the DK-HL7 Questionnaire Form Definition Document and an OperationOutcome will possible warnings. In case of validation errors the Bundle will only contain an OperationOutcome with the validation errors/warnings. |
| [Transform to QRD](OperationDefinition--s-transform-to-QRD.md) | Transforms a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource to a DK-HL7 Questionnaire Response Document (QRD) XML document. The input FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse resource. a FHIR Questionnaire resource. The bundle must also contain a FHIR DocumentReference containing a QFDD xml file (base64 encoded)The returned FHIR DocumentReference contains the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile. |
| [Traverse to SOR](OperationDefinition-Organization-i-traverse-to-sor.md) | Traverse upforwards to the first SOR organization Http response code 404 will be returned if no related SOR organization could be found |
| [Update Patient from KRS](OperationDefinition-ehealth-patient-skrs-update.md) | This operation is used when batch updates on patient information is available from the national service platform. The operation is used by internal components of the eHealth Infrastructure. |
| [Upload QFDD](OperationDefinition--s-upload-QFDD.md) | Uploads an DK-HL7 Questionnaire Form Definition Document (QFDD). The input FHIR DocumentReference must be of type QFDD (74468-0) and the status set to current. Include an attachment which contains the base64 encoded QFDD XML document with contentType application/xml. The QFDD XML document must contain a unique id which is used as the the masterIdentifier in the DocumentReference. The returned FHIR DocumentReference contains a masterIdentifier, a type and the description all pulled from the attachment. |
| [import](OperationDefinition--s-import.md) | Import terminology resources |
| [upload-external-code-system](OperationDefinition--s-upload-external-code-system.md) |  |

### Behavior: Search Parameters 

These define the properties by which a RESTful server can be searched. They can also be used for sorting and including related resources.

| | |
| :--- | :--- |
| [administrativeStatus](SearchParameter-ehealth-communication-search-administrativeStatus.md) | Search parameter for finding communication based on administrative status |
| [appointmentGroupId](SearchParameter-ehealth-appointment-search-groupId.md) | Search parameter for finding resources based on group id |
| [careTeamRecipient](SearchParameter-ehealth-communication-search-careTeamRecipient.md) | Search parameter for finding communication based on CareTeam recipient |
| [careTeamSender](SearchParameter-ehealth-communication-search-careTeamSender.md) | Search parameter for finding communication based on CareTeam sender |
| [careteamParticipant](SearchParameter-ehealth-appointment-search-careteam-participant.md) | Search parameter for finding appointments based on careteam participants |
| [communicationAbout](SearchParameter-ehealth-communication-search-communicationAbout.md) | Search parameter for finding communication based on about |
| [communicationCategory](SearchParameter-ehealth-communication-search-communicationCategory.md) | Search parameter for finding communication based on the category code |
| [communicationGroupId](SearchParameter-ehealth-communication-search-groupId.md) | Search parameter for finding resources based on group id |
| [communicationParticipant](SearchParameter-ehealth-communication-search-participant.md) | Search parameter for finding communication based on participant |
| [communicationRelatesTo](SearchParameter-ehealth-communication-search-relates-to.md) | Search parameter for finding communication based on either participant or episode of care |
| [episodeOfCare](SearchParameter-ehealth-communication-search-episodeOfCare.md) | Search parameter for finding communication based on episodeOfCare |
| [intended-audience](SearchParameter-ehealth-appointment-search-intended-audience.md) | Search parameter for finding intended audience on Appointment |
| [on-behalf-of](SearchParameter-ehealth-communication-search-on-behalf-of.md) | Search parameter for finding communication based on on-behalf-of |
| [patientCPRIdentifier](SearchParameter-ehealth-patient-search-cpridentifier.md) | Search parameter for Patient DK-Core CPR identifier |
| [patientCPRIdentifierUnique](SearchParameter-ehealth-patient-search-cpridentifier-unique.md) | Uniqueness constraint on search parameter patientCPRIdentifier |
| [period](SearchParameter-ehealth-communication-search-period.md) | Search parameter for finding communication based on period |
| [responsible](SearchParameter-ehealth-appointment-search-responsible.md) | Search parameter for finding responsible entity on Appointment |
| [restrictionCategory](SearchParameter-ehealth-communication-search-restrictionCategory.md) | Search parameter for finding communication based on restriction category |
| [threadId](SearchParameter-ehealth-communication-search-threadId.md) | Search parameter for finding communication based on thread id |

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| |
| :--- |
| [ehealth-actionguidance](StructureDefinition-ehealth-actionguidance.md) |
| [ehealth-activitydefinition](StructureDefinition-ehealth-activitydefinition.md) |
| [ehealth-appointment](StructureDefinition-ehealth-appointment.md) |
| [ehealth-auditevent](StructureDefinition-ehealth-auditevent.md) |
| [ehealth-careplan](StructureDefinition-ehealth-careplan.md) |
| [ehealth-careteam](StructureDefinition-ehealth-careteam.md) |
| [ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md) |
| [ehealth-communication](StructureDefinition-ehealth-communication.md) |
| [ehealth-communication-request](StructureDefinition-ehealth-communication-request.md) |
| [ehealth-composition](StructureDefinition-ehealth-composition.md) |
| [ehealth-condition](StructureDefinition-ehealth-condition.md) |
| [ehealth-consent](StructureDefinition-ehealth-consent.md) |
| [ehealth-definedquestion](StructureDefinition-ehealth-definedquestion.md) |
| [ehealth-device](StructureDefinition-ehealth-device.md) |
| [ehealth-devicemetric](StructureDefinition-ehealth-devicemetric.md) |
| [ehealth-deviceusestatement](StructureDefinition-ehealth-deviceusestatement.md) |
| [ehealth-documentreference](StructureDefinition-ehealth-documentreference.md) |
| [ehealth-episodeofcare](StructureDefinition-ehealth-episodeofcare.md) |
| [ehealth-goal](StructureDefinition-ehealth-goal.md) |
| [ehealth-group-appointment](StructureDefinition-ehealth-group-appointment.md) |
| [ehealth-group-videoappointment](StructureDefinition-ehealth-group-videoappointment.md) |
| [ehealth-guidanceresponse](StructureDefinition-ehealth-guidanceresponse.md) |
| [ehealth-library](StructureDefinition-ehealth-library.md) |
| [ehealth-material-communication](StructureDefinition-ehealth-material-communication.md) |
| [ehealth-media](StructureDefinition-ehealth-media.md) |
| [ehealth-message](StructureDefinition-ehealth-message.md) |
| [ehealth-observation](StructureDefinition-ehealth-observation.md) |
| [ehealth-observation-wound-dimensions](StructureDefinition-ehealth-observation-wound-dimensions.md) |
| [ehealth-organization](StructureDefinition-ehealth-organization.md) |
| [ehealth-patient](StructureDefinition-ehealth-patient.md) |
| [ehealth-plandefinition](StructureDefinition-ehealth-plandefinition.md) |
| [ehealth-practitioner](StructureDefinition-ehealth-practitioner.md) |
| [ehealth-practitionerrole](StructureDefinition-ehealth-practitionerrole.md) |
| [ehealth-provenance](StructureDefinition-ehealth-provenance.md) |
| [ehealth-questionnaire](StructureDefinition-ehealth-questionnaire.md) |
| [ehealth-questionnaire-advanced](StructureDefinition-ehealth-questionnaire-advanced.md) |
| [ehealth-questionnaireresponse](StructureDefinition-ehealth-questionnaireresponse.md) |
| [ehealth-relatedperson](StructureDefinition-ehealth-relatedperson.md) |
| [ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md) |
| [ehealth-skrs-patient](StructureDefinition-ehealth-skrs-patient.md) |
| [ehealth-task](StructureDefinition-ehealth-task.md) |
| [ehealth-transformation-documentreference](StructureDefinition-ehealth-transformation-documentreference.md) |
| [ehealth-videoappointment](StructureDefinition-ehealth-videoappointment.md) |
| [ehealth-view](StructureDefinition-ehealth-view.md) |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Action Trigger](StructureDefinition-ehealth-actionTrigger.md) | Defines a reaction along with its trigger conditions. |
| [Administrative status](StructureDefinition-ehealth-administrative-status.md) | The administrative status of how a message recipient has handled a message |
| [Answer condition](StructureDefinition-ehealth-answer-Condition.md) | Defines the Answer condition for an answer option in the questionnaire. |
| [Answer significance](StructureDefinition-ehealth-questionnaire-answerSignificance.md) | Defines the Answer significance for an answer option in the questionnaire. |
| [Artifact Date](StructureDefinition-ehealth-artifact-date.md) | The date (and optionally time) when the artifact was last significantly changed. |
| [Assigning careteam](StructureDefinition-ehealth-assigning-careteam.md) |  |
| [Author organization](StructureDefinition-ehealth-composition-authorOrganization.md) | Organization that authored the Composition |
| [Base](StructureDefinition-ehealth-base.md) | Version Base |
| [Base environment](StructureDefinition-ehealth-base-environment.md) | Base environment |
| [CVR Number](StructureDefinition-ehealth-organization-cvrNumber.md) | The organization's identification code in the Danish 'Centrale Virksomhedsregister' |
| [Calibration expires](StructureDefinition-ehealth-devicemetric-calibrationExpires.md) | Date when the current calibration expires and recalibration is required. |
| [Caremanager organization](StructureDefinition-ehealth-episodeofcare-caremanagerOrganization.md) | Reference to caremanagers organization |
| [Careplan](StructureDefinition-ehealth-clinicalimpression-careplan.md) | Identifies the CarePlan context in which this particular resource was created. |
| [Careplan status history](StructureDefinition-ehealth-careplan-statusHistory.md) |  |
| [Careplan status schedule](StructureDefinition-ehealth-careplan-statusschedule.md) |  |
| [Careteam](StructureDefinition-ehealth-ext-careteam.md) | Careteam |
| [Condition Id](StructureDefinition-ehealth-enableBehavior-conditionId.md) | Id for condition on question. |
| [Content](StructureDefinition-ehealth-content.md) | The content |
| [Context](StructureDefinition-ehealth-deviceusestatement-context.md) | The careplan context for the device use |
| [Copyright item indicator](StructureDefinition-ehealth-questionnaire-item-is-copyright.md) | Indicates that the item is part of a copyright structure (CDA Document sharing - QFDD/QRD) |
| [Creator](StructureDefinition-ehealth-creator.md) | Creator Careteam |
| [Date/time of re-used entity](StructureDefinition-ehealth-provenance-dateTimeOfReusedEntity.md) | Contains date and time of Reused Entity |
| [Decision](StructureDefinition-ehealth-clinicalimpression-decision.md) | Clinical impression decision, 'approved' or 'approved-for-sharing' |
| [Decision context](StructureDefinition-ehealth-clinicalimpression-decisionContext.md) | Library and relevant resources used for evaluation |
| [Description](StructureDefinition-ehealth-description.md) | Natural language description |
| [Ehealth Document manually deprecated](StructureDefinition-ehealth-manuallydeprecated-type.md) | Ehealth Document manually deprecated |
| [Ehealth action guidance for](StructureDefinition-ehealth-actionguidance-for.md) | Action guidance for |
| [Ehealth action guidance type](StructureDefinition-ehealth-actionguidance-type.md) | The action guidance type |
| [Employee title](StructureDefinition-ehealth-employee-title.md) | Title for employed clinicians |
| [End meeting on end time](StructureDefinition-ehealth-end-meeting-on-end-time.md) | Indicates if a video meeting must end on end time |
| [EpisodeOfCare](StructureDefinition-ehealth-guidanceresponse-episodeOfCare.md) | Episode of care |
| [EpisodeOfCare](StructureDefinition-ehealth-task-episodeOfCare.md) |  |
| [ExternalIdentifier](StructureDefinition-ehealth-external-identifier.md) | External Identifier. Note that this Identifier does not have to unique within the Questionnaire. |
| [Feedback](StructureDefinition-ehealth-questionnaire-feedback.md) | Feedback if reponse is within the defined range. |
| [General health condition](StructureDefinition-ehealth-general-health-condition.md) | Describes the general health condition of a patient using FSIII concepts (see http://www.fs3.nu/filer/Dokumenter/Metode/FSIII-Guide-til-helbredstilstande.pdf) |
| [Group id](StructureDefinition-ehealth-group-id.md) | A logical id identifying a set of messages, which have the same recipient (considered a 'group message'). Must be supplied by the client, eg. as a UUID |
| [Guest PIN code](StructureDefinition-ehealth-guest-pin-code.md) | The PIN code to be used to gain access to a video meeting. Is provided by the service, not the client, and is not updateable. |
| [Guest PIN code](StructureDefinition-ehealth-host-pin-code.md) | The PIN code to be used to gain access to a video meeting. Is provided by the service, not the client, and is not updateable. Host PIN must be used in order to start the meeting |
| [Help text](StructureDefinition-ehealth-questionnaire-helpText.md) | Help text for questions. xhtml contains an equivalent of the text string, but includes additional XHTML markup, such as bold, italics, styles, tables, etc. Existing restrictions on XHTML content apply. Note that using markdown allows for greater flexibility of display. |
| [IT competence level](StructureDefinition-ehealth-itcompetencelevel.md) |  |
| [Intended audience](StructureDefinition-ehealth-intendedAudience.md) | Specifies that the resource is only intended for use in the specified organisations. Leave blank if the resource is intended for global use. |
| [Intended organization](StructureDefinition-ehealth-intendedOrganization.md) | The resource is intended to be used by these organizations. |
| [Interpreter required](StructureDefinition-patient-interpreterRequired.md) | This extension describes the IT skills/competence of a patient. The IT competence may optionally be related to a specific device type, and may be assessed using a score (either a FS3 score or a percentage), or as a free text description. |
| [Legal basis](StructureDefinition-ehealth-legalBasis.md) | Legal basis |
| [Max participants](StructureDefinition-ehealth-max-participants.md) | The maximum number of participants allowed to participate in a video meeting |
| [Media Thumbnail representation](StructureDefinition-ehealth-media-thumbnail.md) | A downsampled version of a Media resource content. |
| [Media investigation item](StructureDefinition-ehealth-clinicalimpression-mediaInvestigationItem.md) | Investigation item for Media resources so they can be approved. |
| [Meeting URL](StructureDefinition-ehealth-meeting-url.md) | The URL at which a video meeting will take place. Is provided by the service, not the client, and may not be updated |
| [Modified role](StructureDefinition-ehealth-modifier-role.md) | This is a modifier role that can hold a role and a reference to the item who has the role. Ex. owner + a reference to the owner organization. |
| [Municipality Code](StructureDefinition-ehealth-organization-municipalityCode.md) | The organization's municipality code in the Danish 'Det Centrale Personregister' |
| [Name and address protection](StructureDefinition-ehealth-nameandaddressprotection.md) | Period of name and address protection. Patients with name and address protection are marked with security label ‘restricted’ (R in http://hl7.org/fhir/v3/Confidentiality). |
| [Observation method](StructureDefinition-ehealth-observation-method.md) | The method of acquiring the value of an observation. |
| [On behalf of](StructureDefinition-ehealth-on-behalf-of.md) | On behalf of |
| [Organization Source](StructureDefinition-ehealth-organization-source.md) | The source of the organization |
| [Organization Synchronization status](StructureDefinition-ehealth-organization-synchronizationStatus.md) | The synchronization status of the organization |
| [Organization specialty](StructureDefinition-ehealth-organization-specialty.md) | The specialty of the organization |
| [Overview usage mode](StructureDefinition-ehealth-overviewUsageMode.md) | Identifies whether the specified element and/or results of the element should appear in overview or table presentation. |
| [Participant](StructureDefinition-ehealth-participant.md) | The participating CareTeam or Practitioner. |
| [Patient contact note](StructureDefinition-ehealth-patient-contactnote.md) | This note holds the information of when the patient is available for communication - eg. between 10 and 12 every monday |
| [Performer](StructureDefinition-ehealth-performer.md) | The actual performer in an appointment, eg. teacher in a group class |
| [Performing organization](StructureDefinition-ehealth-performing-organization.md) | Organization who is performing in the given context |
| [Period](StructureDefinition-ehealth-period.md) | Specifies the temporal validity of an ehealth/message instance. Contains a period, eg. specifying temporal validity |
| [Predecessor](StructureDefinition-ehealth-predecessor.md) | Version Predecessor |
| [Priority](StructureDefinition-ehealth-priority.md) | The priority of a message |
| [Privately owned](StructureDefinition-ehealth-device-privatelyOwned.md) | True if this device is privately owned (BYOD - Bring you own device). |
| [Properties](StructureDefinition-ehealth-devicemetric-properties.md) | Properties of this device. Properties are static by nature whereas qualities are dynamic and may change during the life cycle or calibration cycle of a device. |
| [Provider identifier](StructureDefinition-ehealth-organization-providerIdentifier.md) | The providerIdentifier of the organization |
| [Purpose](StructureDefinition-ehealth-purpose.md) | Why this is defined |
| [Qualities](StructureDefinition-ehealth-devicemetric-qualities.md) | Current device quality |
| [Quality](StructureDefinition-ehealth-quality.md) | Minimum required or actually assessed quality values. The qualityType element states the type of quality. For different values of qualityType the required or assessed quality value (qualityCode) must be from different value sets. The relation between qualityType and allowed value sets are defined in the definition of value set http://ehealth.sundhed.dk/vs/quality-types. |
| [Quality history](StructureDefinition-ehealth-devicemetric-qualityHistory.md) | History of device quality |
| [Questionnaire image](StructureDefinition-ehealth-questionnaire-image.md) | Defines the images in the questionnaire answers and questions. |
| [Questionnaire intended organization](StructureDefinition-ehealth-questionnaire-intendedOrganization.md) | The questionnaire is intended to be used by these organizations. |
| [Questionnaire recommendation](StructureDefinition-ehealth-questionnaire-recommendation.md) | Defines the recommendation state of the questionnaire. |
| [Questionnaire response finding basis](StructureDefinition-ehealth-questionnaireresponse-finding-basis.md) | Basis for the overall clinical impression finding of the questionnaire response |
| [Questionnaire type](StructureDefinition-ehealth-questionnaire-type.md) | Concept that represents the overall questionnaire |
| [Recipient careteam](StructureDefinition-ehealth-communication-recipientCareTeam.md) | CareTeam that is a recipient of a Communication |
| [Reference range](StructureDefinition-ehealth-referenceRange.md) | Provides guide for interpretation. Must have at least a low or a high. |
| [Region code](StructureDefinition-ehealth-organization-regionCode.md) | The regionCode of the organization |
| [Registration deadline](StructureDefinition-ehealth-registration-deadline.md) | Registration deadline |
| [Related to](StructureDefinition-ehealth-media-related-to.md) | Related to other media. |
| [Related to](StructureDefinition-ehealth-organization-relatedTo.md) | Relations to other Organizations |
| [Releasable resource](StructureDefinition-ehealth-releasableResource.md) | Indicates if the resource may be shared through national document repositories |
| [Resolved timing](StructureDefinition-ehealth-resolved-timing.md) | Resolved timing reflects whether a measurement (Observation, QuestionnaireResponse or Media) has been performed ad-hoc or as fulfillment of a measurement regime time slot in which case the extent of the time slot is given by start and end. If the measurement regime has a form for which a time slot cannot be resolved or determining is/was not supported, the type unresolved is used. |
| [Responsible](StructureDefinition-ehealth-responsible.md) | Individuals, careteam and/or organization who are responsible in the given context |
| [Responsible organization](StructureDefinition-ehealth-responsible-organization.md) | Organization responsible in a given context |
| [Restriction category](StructureDefinition-ehealth-restriction-category.md) | The resource is intended for certain category of workflow/responsibility only |
| [Reuse criteria](StructureDefinition-ehealth-reuseCriteria.md) | Defines if and when a response can be reused |
| [Revision](StructureDefinition-ehealth-revision.md) | Business revision of the resource |
| [Sender careteam](StructureDefinition-ehealth-communication-senderCareTeam.md) | CareTeam that is a sender of a Communication |
| [Series ID](StructureDefinition-ehealth-media-series-id.md) | Series identifier. |
| [ServiceRequest status history](StructureDefinition-ehealth-servicerequest-statusHistory.md) |  |
| [ServiceRequest status schedule](StructureDefinition-ehealth-servicerequest-statusSchedule.md) |  |
| [Sharing Approval Policy](StructureDefinition-ehealth-sharingApprovalPolicy.md) | Policy for approval of sharing a resource with national data banks |
| [Sharing policy](StructureDefinition-ehealth-sharingPolicy.md) | Policy for sharing a resource with national data banks |
| [Short text](StructureDefinition-ehealth-questionnaire-shortText.md) | Short text for questionnaires |
| [Slider Step-value Decimal](StructureDefinition-ehealth-questionnaire-sliderStepValueDecimal.md) | Defines a decimal number step-value for the slider in the questionnaire. |
| [State of the document sharing](StructureDefinition-ehealth-document-sharing-state.md) | Where in the sharing process the document is, and the reason why |
| [Status](StructureDefinition-ehealth-status.md) | The current status |
| [Status schedule](StructureDefinition-ehealth-episodeofcare-statusschedule.md) | Scheduled status change |
| [Suppliers](StructureDefinition-ehealth-device-suppliers.md) | Suppliers of different kinds. E.g device suppliers, support suppliers, training suppliers, etc. |
| [Task category](StructureDefinition-ehealth-task-category.md) | Category of task. |
| [Task responsible](StructureDefinition-ehealth-task-responsible.md) | Individual organization or Device currently responsible for task execution. |
| [Team history](StructureDefinition-ehealth-teamHistory.md) | History of assigned careTeam |
| [Team schedule](StructureDefinition-ehealth-teamschedule.md) | Scheduled team change |
| [Telecom Custodian](StructureDefinition-ehealth-organization-telecomCustodian.md) | Custodian of this ContactPoint. |
| [Telecom System](StructureDefinition-ehealth-organization-telecomSystem.md) | 
| | | | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| Type of communications system required to make use of the contact point: phone | fax | email | pager | url | sms | ean | other |
 |
| [Telecom Value](StructureDefinition-ehealth-organization-telecomValue.md) | The actual contact point details (i.e. phone number or email address) |
| [Template qualities](StructureDefinition-ehealth-devicemetric-templateQualities.md) | Device quality default settings for an initial, a degraded, and an overridden device quality. |
| [Thread id](StructureDefinition-ehealth-thread-id.md) | A logical id identifying a set of messages, which are grouped in a thread. Can be supplied by the client, eg. as a UUID |
| [Title](StructureDefinition-ehealth-basic-title.md) | Name for this (human friendly) |
| [Title](StructureDefinition-ehealth-title.md) | The title of the message |
| [Trigger Condition](StructureDefinition-ehealth-triggerCondition.md) | Conditions for a triggering action to be met for other action to be triggered. |
| [Usage](StructureDefinition-ehealth-usage.md) | Description for clinicians |
| [Usage mode](StructureDefinition-ehealth-media-usage-mode.md) | Usage mode of the media. |
| [VMR URI](StructureDefinition-ehealth-vmr-uri.md) | Virtual Meeting Room URI that can be used in eg. webRTC clients. Is provided by the service, not the client, and may not be updated. |
| [Version](StructureDefinition-ehealth-version.md) | Business version |
| [View for](StructureDefinition-ehealth-view-for.md) | The valueset matching the view |
| [View investigation item](StructureDefinition-ehealth-clinicalimpression-viewInvestigationItem.md) | Investigation item for View resources so they can be approved. |
| [View type](StructureDefinition-ehealth-view-type.md) | Ehealth view type |
| [assessor-Organization](StructureDefinition-ehealth-clinicalimpression-assessor-organization.md) | The organization that the assessor is a part of. |
| [assessor-other](StructureDefinition-ehealth-clinicalimpression-assessor-other.md) | The patient or the related person performing the assessment. |
| [effectivePeriod](StructureDefinition-ehealth-effectivePeriod.md) | Clinically relevant time-period for questionnaire response. |
| [includeAsExtra](StructureDefinition-ehealth-include-as-extra.md) | Used to mark that the action/service request may be performed as extra, meaning the action/service request may also be performed outside the resolved timing slots. |
| [recommendation](StructureDefinition-ehealth-recommendation.md) | Recommendation state of the plan definition |
| [triggerEnablementCode](StructureDefinition-ehealth-trigger-enablement-code.md) | Controls whether this ServiceRequest will react to trigger conditions expressed in other activities of the plan. |
| [useContext](StructureDefinition-ehealth-useContext.md) | The context that the content is intended to support |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Action](ValueSet-ehealth-action.md) | action status. |
| [Action guidance For Types](ValueSet-ehealth-action-guidance-for-types.md) | Action guidance for types |
| [Action guidance types](ValueSet-ehealth-action-guidance-types.md) | Action guidance types |
| [Activity Definition Code](ValueSet-ehealth-activitydefinition-code.md) | Activity Definition Code. |
| [Administrative Status](ValueSet-administrative-status.md) | Administrative status |
| [Appointment Reason](ValueSet-ehealth-appointment-reason.md) | Appointment reason |
| [Appointment Service Type](ValueSet-ehealth-appointment-servicetype.md) | Appointment service type |
| [Appointment Type Codes](ValueSet-appointmenttype-codes.md) | Appointment type codes used by the system |
| [Audit Restriction Levels](ValueSet-ehealth-audit-restriction-levels.md) |  |
| [Basic resource type](ValueSet-ehealth-basic-resource-type.md) | Basic resource type |
| [Body site](ValueSet-ehealth-body-site.md) | Body site |
| [CareTeam Category](ValueSet-ehealth-careteam-category.md) | 
| | | |
| :--- | :--- | :--- |
| http://hl7.org/fhir/ValueSet/careteam-category + ssl | SSL | Service Support and Logistics Employee. |
 |
| [CareTeam Participant Role](ValueSet-ehealth-careteam-participant-role.md) | Care Team Participant Role. |
| [Careplan Category](ValueSet-ehealth-careplan-category.md) | Careplan Category. |
| [Clinical Impression Codes](ValueSet-ehealth-clinicalimpression-codes.md) | Value set of clinical impression codes. |
| [ClinicalImpression Decision Codes](ValueSet-ehealth-clinicalimpression-decision-codes.md) | Value set of clinical impression decision codes. |
| [ClinicalImpression Finding Codes](ValueSet-ehealth-clinicalimpression-finding-codes.md) | Value set of clinical impression finding codes. |
| [ClinicalImpression Investigation Item Codes](ValueSet-ehealth-clinicalimpression-investigation-item-codes.md) | Value set of clinical impression investigation item codes. |
| [Communication Category](ValueSet-ehealth-communication-category.md) | Communication Category. |
| [Conditions](ValueSet-ehealth-conditions.md) | Conditions. |
| [Consent Category](ValueSet-ehealth-consent-category.md) | Value set of kinds of consents. |
| [ContactPoint Custodian](ValueSet-ehealth-contactpoint-custodian.md) | Contact point custodians. |
| [ContactPoint System](ValueSet-ehealth-contactpoint-system.md) | Contact point systems. |
| [DK_IHE_ClassCode_VS](ValueSet-dk-ihe-classcode-vs.md) | Value set for the classCode attribute. |
| [DK_IHE_EventCodeLists_VS](ValueSet-dk-ihe-eventcodelists-vs.md) | Event codes used in DK IHE Document sharing. The codes shall be NPU or procedure codes used in the Danish health care systems. |
| [DK_IHE_FormatCode_VS](ValueSet-dk-ihe-formatcode-vs.md) | Value set for document format code used in national Document sharing. |
| [DK_IHE_HealthcareFacilityTypeCode_VS](ValueSet-dk-ihe-healthcarefacilitytypecode-vs.md) | Allowed value set for healthcare facility type code represents the type of organizational setting of the clinical encounter during which the documented act occurred. |
| [DK_IHE_TypeCode_VS](ValueSet-dk-ihe-typecode-vs.md) | Value set for the typeCode attribute. The typeCode specifies the precise type of document from the user perspective. The granularity of typeCode is finer grained than its superior classCode. |
| [DK_IHE_practiceSettingCode_VS](ValueSet-dk-ihe-practicesettingcode-vs.md) | Values used for the document metadata attribute practiceSettingCode, which is an attribute specifying the clinical specialty where the act that resulted in the document was performed (e.g., Family Practice, Laboratory, Radiology). The value set is based on a subset of the code list from the SOR lookup table 'SOR-Enhedstyper' (http://sor.sundhedsstyrelsen.dsdn.dk/lookupdata/#EntityTypes, accessable on Sundhedsdatanettet (SDN)), which is based on SNOMED codes. |
| [Data Absent Reason](ValueSet-ehealth-data-absent-reason.md) | Used to specify why the normally expected content of the data element is missing. |
| [Device Calibration Actor](ValueSet-ehealth-device-calibration-actor.md) | Device calibration actor. |
| [Device Calibration Period](ValueSet-ehealth-device-calibration-period.md) | Device calibration period. |
| [Device Calibration Type](ValueSet-ehealth-device-calibration-type.md) | Device calibration type |
| [Device Measurement Unit](ValueSet-ehealth-device-measurement-unit.md) | Device measurement unit |
| [Device Measuring Quality](ValueSet-ehealth-device-measuring-quality.md) | Device Measuring Quality value set. |
| [Device Safety](ValueSet-ehealth-device-safety.md) | Device safety value set. |
| [Device Supplier Roles](ValueSet-ehealth-device-supplier-roles.md) | Device Supplier Roles value set. |
| [Device Types](ValueSet-ehealth-device-types.md) | Device Types value set. |
| [Device Use Reason](ValueSet-ehealth-device-use-reason.md) | Device Use Reason value set. |
| [DeviceMetric Quality Types](ValueSet-ehealth-devicemetric-quality-types.md) | Device Metric Quality Types value set. |
| [DeviceMetricPropertyTypes](ValueSet-ehealth-devicemetric-property-types.md) | Device Metric Property Types value set. |
| [Document Category](ValueSet-ehealth-document-category.md) | Document Category value set. |
| [Document Class](ValueSet-ehealth-document-class.md) | Document Class value set. |
| [Document Sharing State](ValueSet-document-sharing-state.md) | Document Sharing State |
| [Document Type](ValueSet-ehealth-document-type.md) | Document Type value set. |
| [EHealthDocumentReference Type](ValueSet-ehealth-document-reference-type.md) | EHealthDocumentReference Type ValueSet |
| [Event Type Codes](ValueSet-ehealth-event-type-codes.md) | Event type codes value set. |
| [FS III, helbredstilstande](ValueSet-fs3-health.md) | FS III, helbredstilstande |
| [Facility Type Codes](ValueSet-ehealth-facility-type-codes.md) | Allowed value set for healthcare facility type code represents the type of organizational setting of the clinical encounter during which the documented act occurred. |
| [FormatCodes](ValueSet-ehealth-format-codes.md) | Format Codes value set. |
| [Goal Description](ValueSet-ehealth-goal-description.md) | Value set for goal description. |
| [Goal Target Measure](ValueSet-goal-target-measure.md) | Value set for goal target measure. |
| [IT Competence Level codes](ValueSet-competence-percentage-codes.md) | The set of possible message types |
| [Jurisdiction](ValueSet-ehealth-jurisdiction.md) | Jurisdiction value set |
| [KLTilstandeKoderSygepleje](ValueSet-kl.dk-fhir-common-caresocial-ValueSet-KLConditionCodesNursing.md) | Danish municipality nursing condition codes |
| [Library Type](ValueSet-ehealth-library-type.md) | http://terminology.hl7.org/CodeSystem/library-type + automated-processing |
| [Material Assignment Participant Function](ValueSet-material-assignment-participant-function.md) | The function of the participant in material assignment (performer). |
| [Material Registration Participant Function](ValueSet-material-registration-participant-function.md) | The function of the participant in material registration (author / editor). |
| [MaterialCommunicationCategory](ValueSet-material-communication-category.md) | The set of possible material-communication categories |
| [Measurement Sharing Policies](ValueSet-ehealth-measurement-sharing-policies.md) | Policies of sharing submissions with national registers such as KIH. |
| [MedCom PHMR Observation ValueSet](ValueSet-phmr-observation-vs.md) | Value set used for Danish (DK) HL7 CDA profile PHMR-DK observation codes. |
| [Media Codes](ValueSet-ehealth-media-codes.md) | Media codes value set |
| [Media Usage Mode](ValueSet-ehealth-media-usage-mode.md) | Media Usage Mode |
| [Media modality](ValueSet-ehealth-media-modality.md) | Media modality |
| [Media view](ValueSet-ehealth-media-view.md) | Media view |
| [MessageCategory](ValueSet-message-category.md) | The set of possible message types |
| [MessageMedium](ValueSet-message-medium.md) | The set of possible message types |
| [Modifier Role](ValueSet-ehealth-modifier-role.md) | Value set of plan definition modifier role codes. |
| [OIO BPP Roles](ValueSet-ehealth-oio-bpp-roles.md) | OIO BPP roles. |
| [OIO Organization Type](ValueSet-ehealth-oio-organization-type.md) | Value set used for indicating the organization type for organizations from OIO / STS-ORG |
| [Observation Codes](ValueSet-ehealth-observation-codes.md) | Observation codes value set. |
| [Observation Method](ValueSet-ehealth-observation-method.md) | Identifies how an observation is acquired. |
| [Organization Relation Type](ValueSet-ehealth-organization-relation-type.md) | How Organizations are related. |
| [Organization Source](ValueSet-ehealth-organization-source.md) | Value set used for indicating the organization source |
| [Organization Specialty](ValueSet-ehealth-organization-specialty.md) | Value set used for indicating the specialty for organizations. |
| [Organization Synchronization Status](ValueSet-ehealth-organization-synchronization-status.md) | Value set used for indicating the organization synchronization status |
| [Organization Type](ValueSet-ehealth-organization-type.md) | Value set used for indicating the organization type |
| [Overview Usage Mode](ValueSet-ehealth-overviewUsageMode.md) | Whether the element should appear in overview modes of operation. |
| [Participant Function](ValueSet-participant-function.md) | The function of the participant (primay / secondary contact). |
| [PlanDefinition Recommendation](ValueSet-ehealth-plandefinition-recommendation.md) | Value set of plan definition recommendation codes. |
| [Policies for provenances](ValueSet-ehealth-provenance-policies.md) | Policies under which data can be provided |
| [Practice Setting Codes](ValueSet-ehealth-practice-setting-codes.md) | Value set used for indicating the specialty for organizations. |
| [Priority](ValueSet-ehealth-priority.md) | Practitioner roles |
| [Quality Types](ValueSet-ehealth-quality-types.md) | Types of quality; e.g. situation quality, usability quality, device quality. |
| [Questionnaire Elements](ValueSet-ehealth-questionnaire-elements.md) | Types of questionnaire elements; e.g. group, question, answer. |
| [Questionnaire Item Control](ValueSet-ehealth-questionnaire-item-control.md) | Questionnaire Item Control value set. |
| [Questionnaire Item Image Format](ValueSet-ehealth-questionnaire-item-image-format.md) | Questionnaire item image format value set. |
| [Questionnaire Item Significance Indicator](ValueSet-ehealth-questionnaire-significance-indicator.md) | Questionnaire Significance Item Indicator value set. |
| [Questionnaire Types](ValueSet-ehealth-questionnaire-types.md) | Questionnaire type value set. |
| [QuestionnaireRecommendation](ValueSet-ehealth-questionnaire-recommendation.md) | Value set of questionnaire recommendation codes. |
| [Reference Range Type](ValueSet-ehealth-reference-range-type.md) | Reference Range type value set. |
| [RegionalSubdivisionCodes](ValueSet-regional-subdivision-codes.md) | Subdivision codes (Regional codes) used in Denmark |
| [RelationshipTypes](ValueSet-relatedperson-relationshiptype.md) | A set of codes that can be used to indicate the relationship between a Patient and a Related Person used in Denmark |
| [Resolved Timing Type](ValueSet-resolved-timing-type.md) | Value set for resolved timing type. |
| [Restriction Category](ValueSet-ehealth-restriction-category.md) | Value set for restriction category. |
| [SSL Service Types](ValueSet-ehealth-device-service-types.md) | SSL service types |
| [Sharing Approval Policies](ValueSet-ehealth-measurement-sharing-approval-policies.md) | Policies of approval for sharing measurement submissions with national registers such as KIH. |
| [Situation Quality](ValueSet-ehealth-situation-quality.md) | Value set of hierarchical codes stating the quality of a measurement situation. |
| [SorOrganizationSpecialty](ValueSet-sor-organization-specialty.md) | Value set used for indicating the specialty for organizations from Sor |
| [SorOrganizationType](ValueSet-ehealth-sor-organization-type.md) | Value set used for indicating the organization type for organizations from Sor |
| [Sygdoms- og diagnosekoder](ValueSet-ehealth-health-conditions.md) | Health Condition Codes |
| [Task Category](ValueSet-ehealth-task-category.md) | Value set for task category. |
| [Thumbnail Size Category](ValueSet-ehealth-thumbnail-size-category.md) | Thumbnail size is a value set with the available sizes of low resolution media representations. |
| [Thumbnail Status](ValueSet-ehealth-thumbnail-status.md) | Thumbnail status is a value set for the status of low resolution media representations. |
| [Tilstandskoder](ValueSet-ehealth-condition-conditions.md) | Condition Codes |
| [Topic Type](ValueSet-ehealth-topic-type.md) | Topic types. |
| [Trigger Behavior](ValueSet-ehealth-trigger-behavior.md) | Trigger behavior |
| [Trigger Enablement Code](ValueSet-ehealth-trigger-enablement-code.md) | ServiceRequest trigger enablement value set. |
| [UCUM printSymbol supplement](ValueSet-ehealth-ucum-printsymbol-supplement.md) | UCUM printSymbol supplement |
| [Usage Quality](ValueSet-ehealth-usage-quality.md) | Value set of hierarchical codes stating the quality of the user's operation of a device/ability to qualify questionnaire answers. |
| [View For Type](ValueSet-ehealth-view-for-type.md) | View for types |
| [View Type](ValueSet-ehealth-view-type.md) | View types |
| [eHealth Designation Use](ValueSet-ehealth-designation-use.md) | Details of how a designation would be used. |
| [eHealth Message Reason Code](ValueSet-ehealth-message-reasonCode.md) | eHealth Message Reason Code |
| [eHealth Program](ValueSet-ehealth-program.md) | Programs or projects using the eHealth Infrastructure and wanting to mark various resources as intended for their non-exclusive use. |
| [eHealth Property](ValueSet-ehealth-property.md) | Used to distinguish/extract specific properties of a code. |
| [eHealth Usage Context Type](ValueSet-ehealth-usage-context-type.md) | The following table supersedes the expansion table below for the following codes:
| | | | |
| :--- | :--- | :--- | :--- |
| focus | http://terminology.hl7.org/CodeSystem/usage-context-type | Clinical Focus | The clinical concept(s) addressed by the artifact/element. For example, disease, diagnostic test interpretation, medication ordering as in http://ehealth.sundhed.dk/vs/conditions |
| program | http://terminology.hl7.org/CodeSystem/usage-context-type | Program | A program/project of work for which this artifact/element is applicable. http://ehealth.sundhed.dk/vs/ehealth-program |
| activity | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type | Activity Type | The type of activity in which it is relevant to use a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/activitydefinition-code value set. |
| supports | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type | Supports | The type of activity supported by a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/activitydefinition-code value set. |
| range | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type | Range | The type of reference range with which it is relevant to use a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/reference-range-type value set. |
| questionnaire-related | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type | Questionnaire Related | The type of questionnaire element with which it is relevant to use a coded values/id registries having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/questionnaire-elements value set. |
 |
| [eHealthUnit](ValueSet-ehealth-unit.md) | Value set of Unit Codes and Ucum common |
| [eHealthUnitCodes](ValueSet-ehealth-unit-code.md) | Value set of Unit Codes |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Action](CodeSystem-ehealth-action.md) | Action Code |
| [Action Participant Function](CodeSystem-action-participant-function.md) | The function performed by the participant for the action. |
| [Action Selection Behavior Supplement](CodeSystem-ehealth.sundhed.dk-action-selection-behavior-supplement.md) | Defines selection behavior of a group. |
| [Action Type](CodeSystem-ehealth-action-type.md) | Action type |
| [Action guidance types](CodeSystem-ehealth-action-guidance-types.md) | Action guidance types |
| [Activity Definition Codes](CodeSystem-ehealth-activitydefinition-code.md) | Kinds of activities |
| [Address Type](CodeSystem-hl7.org-fhir-address-type.md) | The type of an address (physical / postal) |
| [Address Use](CodeSystem-hl7.org-fhir-address-use.md) | The use of an address |
| [Administrative Status](CodeSystem-ehealth-administrative-status.md) | Administrative status |
| [Appointment Reason](CodeSystem-ehealth-appointment-reason.md) | Appointment Reason |
| [Appointment Service Types](CodeSystem-ehealth-appointment-servicetype.md) | Appointment service type |
| [Appointment Type Codes](CodeSystem-ehealth-appointmenttype-codes.md) | Appointment type code |
| [Audit Restriction Levels](CodeSystem-ehealth-audit-restriction-levels.md) | Audit Event Restriction Levels used to indicate whether the audit log should be hidden from the citizen and/or the legal guardian when interacting with the infrastructure. |
| [Basic resource type](CodeSystem-ehealth-basic-resource-type.md) | Basic resource type |
| [Care Plan Status](CodeSystem-care-plan-status.md) | Indicates whether the plan is currently being acted upon, represents future intentions, or is now a historical record. |
| [Care Team Status](CodeSystem-hl7.org-fhir-care-team-status.md) | Indicates the status of the care team. |
| [CarePlan Category](CodeSystem-ehealth-careplan-category.md) | Care Plan Category |
| [CareTeam Category](CodeSystem-ehealth-careteam-category.md) | Care Team Category |
| [CareTeam Participant Role](CodeSystem-ehealth-careteam-participant-role.md) | Care Team Participant Role |
| [ClinicalImpression Codes](CodeSystem-ehealth-clinicalimpression-codes.md) | Assessment types |
| [ClinicalImpression Decision Codes](CodeSystem-ehealth-clinicalimpression-decision-codes.md) | Clinical Impression Decision Codes |
| [ClinicalImpression Decision Support Codes](CodeSystem-ehealth-clinicalimpression-decision-support-codes.md) | Decision support codes |
| [ClinicalImpression Finding Codes](CodeSystem-ehealth-clinicalimpression-finding-codes.md) | Clinical Impression Finding Codes |
| [ClinicalImpression Investigation Item Codes](CodeSystem-ehealth-clinicalimpression-investigation-item-codes.md) | Clinical Impression Investigation Item Codes |
| [Clone Operation](CodeSystem-ehealth-clone-operation.md) | Clone operation codes |
| [Common Codes from BCP-47](CodeSystem-urn-ietf-bcp-47.md) | Common Codes from BCP-47 (http://tools.ietf.org/html/bcp47) |
| [Communication Category](CodeSystem-ehealth-communication-category.md) | Communication category |
| [Conditions](CodeSystem-ehealth-conditions.md) | Condition codes |
| [Consent Category](CodeSystem-ehealth-consent-category.md) | Consent codes |
| [Consent State Codes](CodeSystem-hl7.org-fhir-consent-state-codes.md) | Indicates the state of the consent |
| [ContactPoint Custodian](CodeSystem-ehealth-contactpoint-custodian.md) | Contact Point Custodian |
| [ContactPoint System](CodeSystem-ehealth-contactpoint-system.md) | Contact Point System |
| [DK IHE ClassCode CS](CodeSystem-urn-oid-1.2.208.184.100.9.md) | Code system for the classCode attribute |
| [DK IHE Format Code CodeSystem](CodeSystem-dk-ihe-formatcode-cs.md) | Code system for document format code used in national Document sharing |
| [Danish SNOMED CT Extension](CodeSystem-snomed-20150731.md) | Danish SNOMED CT Extension |
| [Danish SNOMED CT Extension](CodeSystem-snomed-20180331.md) | Danish SNOMED CT Extension |
| [Danish SNOMED CT Extension](CodeSystem-snomed-20180930.md) | Danish SNOMED CT Extension |
| [DataAbsentReason](CodeSystem-data-absent-reason.md) | Used to specify why the normally expected content of the data element is missing. |
| [Days Of Week](CodeSystem-hl7.org-fhir-days-of-week.md) | The days of the week. |
| [Device Measuring Quality](CodeSystem-ehealth-device-measuring-quality.md) | Quality codes for qualities with which a device can perform measuring |
| [Device Supplier Roles](CodeSystem-ehealth-device-supplier-roles.md) | Types of device related services. |
| [Device Types](CodeSystem-ehealth-device-types.md) | Types of devices. |
| [Device Use Reason](CodeSystem-ehealth-device-use-reason.md) | Device use reasons. |
| [Device calibration actor](CodeSystem-ehealth-device-calibration-actor.md) | Device calibration actor. |
| [Device calibration period](CodeSystem-ehealth-device-calibration-period.md) | Device calibration period. |
| [Device safety](CodeSystem-ehealth-device-safety.md) | Device safety |
| [Device service types](CodeSystem-ehealth-device-service-types.md) | Device service types. |
| [DeviceMetric Property Types](CodeSystem-ehealth-devicemetric-property-types.md) | Types of properties which can be attributed to a Device. |
| [DeviceMetric Quality Types](CodeSystem-ehealth-devicemetric-quality-types.md) | Device metric quality type codes |
| [Document Class](CodeSystem-ehealth-document-class.md) | Document Class |
| [Document Sharing State](CodeSystem-document-sharing-state.md) | Document Sharing State |
| [Document Type](CodeSystem-ehealth-document-type.md) | Document Type |
| [EHealthDocumentReference Type](CodeSystem-ehealth-document-reference-type.md) | EHealthDocumentReference Type CodeSystem |
| [Ehealth System](CodeSystem-ehealth-system.md) | Tag værdi for anvendersystem |
| [Episode Of Care Status](CodeSystem-hl7.org-fhir-episode-of-care-status.md) | The status of the episode of care. |
| [Event Timing](CodeSystem-EventTiming.md) | EventTiming |
| [FS III, Bevægeapparat](CodeSystem-fs3-health-musculoskeletal.md) | FS III, Bevægeapparat |
| [FS III, Egenomsorg](CodeSystem-fs3-group-selfcare.md) | FS III, Egenomsorg |
| [FS III, Ernæring](CodeSystem-fs3-health-nutrition.md) | FS III, Ernæring |
| [FS III, Funktionsniveau](CodeSystem-fs3-health-function-level.md) | FS III, Funktionsniveau |
| [FS III, Hud og slimhinder](CodeSystem-fs3-health-skin-and-mucous-membranes.md) | FS III, Hud og slimhinder |
| [FS III, Kommunikation](CodeSystem-fs3-health-communication.md) | FS III, Kommunikation |
| [FS III, Mentale funktioner](CodeSystem-fs3-group-mentalfunctions.md) | FS III, Mentale funktioner |
| [FS III, Mobilitet](CodeSystem-fs3-group-mobility.md) | FS III, Mobilitet |
| [FS III, Praktiske opgaver](CodeSystem-fs3-group-practicaltasks.md) | FS III, Praktiske opgaver |
| [FS III, Psykosociale forhold](CodeSystem-fs3-health-psychosocial-conditions.md) | FS III, Psykosociale forhold |
| [FS III, Respiration og cirkulation](CodeSystem-fs3-health-respiration-and-circulation.md) | FS III, Respiration og cirkulation |
| [FS III, Samfundsliv](CodeSystem-fs3-group-communitylife.md) | FS III, Samfundsliv |
| [FS III, Seksualitet](CodeSystem-fs3-health-sexuality.md) | FS III, Seksualitet |
| [FS III, Smerter og sanseindtryk](CodeSystem-fs3-health-pain-and-sensory-impressions.md) | FS III, Smerter og sanseindtryk |
| [FS III, Søvn og hvile](CodeSystem-fs3-health-sleep-and-rest.md) | FS III, Søvn og hvile |
| [FS III, Udskillelse af affaldsstoffer](CodeSystem-fs3-health-excretion-of-waste-materials.md) | FS III, Udskillelse af affaldsstoffer |
| [FS III, Viden og udvikling](CodeSystem-fs3-health-knowledge-and-development.md) | FS III, Viden og udvikling |
| [FS III, borgerens vurdering af betydning](CodeSystem-fs3-citizen-importance-scores.md) | FS III, borgerens vurdering af betydning |
| [FS III, borgerens vurdering af udførelse](CodeSystem-fs3-citizen-performance-scores.md) | FS III, borgerens vurdering af udførelse |
| [FS III, niveauer](CodeSystem-fs3-scores.md) | FS III, niveauer |
| [FSIII](CodeSystem-kl.dk-fhir-common-caresocial-CodeSystem-FSIII.md) | Codes from FSIII |
| [Goal Description](CodeSystem-ehealth-goal-description.md) | Goal Description |
| [HL7 Terminology Maintenance Infrastructure Vocabulary](CodeSystem-hl7TermMaintInfra.md) | Codes that may have been strings or other types of data in pre-existing tooling for V3 and V2 terminology maintenance, and moved to codes in this code system for proper handling in the FHIR based UTG maintenance facilities. |
| [Integer percentage codes](CodeSystem-percentage-codes.md) | Integer percentage codes 0-100 |
| [Jurisdiction](CodeSystem-ehealth-jurisdiction.md) | Jurisdiction |
| [LOINC Code System Supplement](CodeSystem-ehealth.sundhed.dk-loinc.org-supplement.md) | LOINC is a freely available international standard for tests, measurements, and observations |
| [Library Type](CodeSystem-ehealth-library-type.md) | Library Type |
| [Material Category](CodeSystem-ehealth-material-category.md) | Material Category |
| [Material Communication Category](CodeSystem-ehealth-material-communication-category.md) | The set of possible material-communication categories |
| [Measurement Sharing Policies](CodeSystem-ehealth-measurement-sharing-policies.md) | Measurement sharing policies |
| [MedCom Measurement CodeSystem](CodeSystem-urn-oid-1.2.208.184.100.8.md) | Complete MedCom Measurement CodeSystem (MCS) |
| [MedCom Message Codes](CodeSystem-urn-oid-1.2.208.184.100.1.md) | MedCom Message Codes. |
| [Media usage mode](CodeSystem-ehealth-media-usage-mode.md) | Identifies the what the media resource is used for. |
| [Message Category](CodeSystem-ehealth-message-category.md) | Message category types |
| [Message Medium](CodeSystem-ehealth-message-medium.md) | Message medium types |
| [Message ReasonCode](CodeSystem-ehealth-message-reasonCode.md) | Message ReasonCode |
| [Modifier Role](CodeSystem-ehealth-modifier-role.md) | Modifier Role |
| [NPU DK](CodeSystem-1.2.208.176.2.1--20190829.md) | It is the translation into Danish of the International NPU Terminology. The NPU terminology defines types of clinical laboratory results expressed as patient properties, with measurement units where relevant, and with individual identifiers. The NPU terminology is owned by: the International Union of Pure and Applied Chemistry (IUPAC) and the International Federation of Clinical Chemistry and laboratory medicine (IFCC). The Danish Health Data Authority (see OID {iso(1) member-body(2) dk(208) nsi(176)}) serves as the international repository for the international version. Child OIDs may be registered by the Danish Health Data Authority on decision by the NPU Terminology Steering Committee. OIDs for the national versions are registered by the National Release Centers. |
| [OIO Organization Type](CodeSystem-ehealth-oio-organization-type.md) | Organization types specific for organizations from OIO / STS-ORG |
| [OIO-BPP Role](CodeSystem-ehealth-oio-bpp-roles.md) | OIO BPP Role |
| [Observation Method](CodeSystem-ehealth-observation-method.md) | Identifies how an observation is acquired. |
| [Organization Relation Type](CodeSystem-ehealth-organization-relation-type.md) | Organization Relation Type |
| [Organization Source](CodeSystem-ehealth-organization-source.md) | Organization source type |
| [Organization Synchronization Status](CodeSystem-ehealth-organization-synchronization-status.md) | Organization synchronization status type |
| [Overview usage mode](CodeSystem-ehealth-overviewUsageMode.md) | Identifies whether the specified element and/or results of the element should appear in overview or table presentation. |
| [Participant Function](CodeSystem-participant-function.md) | Participant Function. |
| [PlanDefinition Recommendation](CodeSystem-ehealth-plandefinition-recommendation.md) | Plan Definition Recommendation |
| [Policies for provenances](CodeSystem-ehealth-provenance-policies.md) | Policies under which data can be provided |
| [Priority](CodeSystem-ehealth-priority.md) | Priority |
| [Publication Status](CodeSystem-hl7.org-fhir-publication-status.md) | The lifecycle status of a Value Set or Concept Map. |
| [Quality Types](CodeSystem-ehealth-quality-types.md) | Quality Types |
| [Questionnaire Elements](CodeSystem-ehealth-questionnaire-elements.md) | Questionnaire elements |
| [Questionnaire Item Significance Indicator](CodeSystem-ehealth-questionnaire-item-significance-indicator.md) | Questionnaire Item Significance Indicator |
| [Questionnaire Item Type](CodeSystem-item-type.md) | Distinguishes groups from questions and display text and indicates data type for questions |
| [Questionnaire Recommendation](CodeSystem-ehealth-questionnaire-recommendation.md) | Questionnaire Recommendation |
| [Questionnaire Types](CodeSystem-ehealth-questionnaire-types.md) | Questionnaire Types |
| [Questionnaires used in the Danish Patient Reported Outcome (PRO)](CodeSystem-urn-oid-1.2.208.176.7.3.1.md) | Code system for questionnaires used in the Danish Patient Reported |
| [Reference Range Type](CodeSystem-ehealth-reference-range-type.md) | Reference Range Type |
| [Regional subdivision codes](CodeSystem-iso-reg-subdiv-codes.md) | Subdivision codes (Regional codes) used in Denmark |
| [Request Status](CodeSystem-hl7.org-fhir-request-status.md) | Codes identifying the stage lifecycle stage of a request |
| [Resolved Timing Type](CodeSystem-resolved-timing-type.md) | Resolved Timing Type |
| [Resource Type](CodeSystem-hl7.org-fhir-resource-types.md) | One of the resource types defined as part of FHIR. |
| [Restriction Category](CodeSystem-ehealth-restriction-category.md) | Restriction Category |
| [SNOMED CT Code System Supplement](CodeSystem-ehealth.sundhed.dk-snomed.info-sct-supplement.md) | SNOMED Clinical Terms |
| [SOR Organization Specialty](CodeSystem-ehealth-sor-organization-specialty.md) | Organization specialties specific for organizations from Sor |
| [SOR Organization Type](CodeSystem-ehealth-sor-organization-type.md) | Organization types specific for organizations from Sor |
| [Sharing Approval Policies](CodeSystem-ehealth-measurement-sharing-approval-policies.md) | Sharing approval policies |
| [Situation Quality](CodeSystem-ehealth-situation-quality.md) | Codes stating the quality of a measurement situation |
| [Sundhedsvæsenets klassifikationssystem (SKS)](CodeSystem-urn-oid-1.2.208.176.2.4.md) |  |
| [Task Category](CodeSystem-ehealth-task-category.md) | Task Category |
| [Task Handover Roles](CodeSystem-ehealth-task-handover-roles.md) | Task Handover Roles |
| [Thumbnail Size Category](CodeSystem-ehealth-thumbnail-size.md) | Thumbnail size is a code system for the sizes of low resolution media representations. |
| [Thumbnail status](CodeSystem-ehealth-thumbnail-status.md) | Thumbnail status is a code system for the status of low resolution media representations. |
| [Topic Type](CodeSystem-ehealth-topic-type.md) | Topic type |
| [Trigger Enablement Code](CodeSystem-ehealth-trigger-enablement-code.md) | Trigger Enablement Code |
| [UCUM printSymbol supplement](CodeSystem-ehealth-ucum-printsymbol-supplement.md) | UCUM printSymbol supplement |
| [Usage Quality](CodeSystem-ehealth-usage-quality.md) | Quality codes for usage or operating of measuring device |
| [View types](CodeSystem-ehealth-view-type.md) | View types |
| [eHealth Designation Use](CodeSystem-ehealth-designation-use.md) | Codes used to identify/describe designation use. |
| [eHealth Program](CodeSystem-ehealth-program.md) | Codes for programs or projects using the eHealth Infrastructure and wanting to mark various resources as intended for their non-exclusive use. |
| [eHealth Property](CodeSystem-ehealth-property.md) | Codes used to identity specific properties on codes in eHealth CodeSystems. |
| [eHealth Unit Codes](CodeSystem-ehealth-unit-code.md) | Unit Codes |
| [eHealth Usage Contxt Type](CodeSystem-ehealth-usage-context-type.md) | Usage Context type |
| [v3 Code System TimingEvent](CodeSystem-v3-TimingEvent.md) | **** MISSING DEFINITIONS **** |

### Terminology: Naming Systems 

These define identifier and/or code system identities used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Danish civil registration system - CPR](NamingSystem-cpr.md) | The Danish civil registration system ("CPR") encompasses basic personal data about anyone with a civil registration number. A civil registration number shall be allocated to anyone who: 1) is registered in the national register in Denmark on the grounds of birth or relocation from abroad; 2) is included under Arbejdsmarkedets TillægsPension (ATP); 3) according to the tax authorities, is required to have a civil registration number for the purpose of tax processing in Denmark. |
| [Sundhedsvæsenets Organisationsregister (SOR)](NamingSystem-sor.md) | SOR is provided by the Danish Health Data Authority under the Danish Ministry of Health. The register holds organizations within the Danish health sector, their geographical and virtual addresses as well as codes for their identification and for EDI-communication. Danish Health Data Authority is responsible for issuing and publishing codes to identify organizations across health care sectors and related public and private services. SOR includes organizational data on hospitals, the primary care sector (physiotherapists, general practitioners, dentists etc.) and municipal health service organizations as well as non-health care organizations that need to be able to receive data from the former. |
| [Ydernummer](NamingSystem-ydernummer.md) | The Danish Health Authority and Danish Regions can identify doctors' names etc. via the provider number ("ydernummer"). The different groups of doctors (general practitioners, ear specialists, eye specialists, etc.) have their own provider number range. Multiple doctors in the same practice will often have the same provider number. Only doctors without a provider number use the special out-of-hours doctor numbers.Provider numbers can change over time. A provider number may be assigned to a doctor who quits or retires, after which the provider number becomes available and can later be assigned to another doctor. |
| [eHealth Device Identifier](NamingSystem-ehealth-device-identifier.md) | An identifier of a device used in eHealth |
| [eHealth Environment](NamingSystem-ehealth-environment.md) | The eHealth Environment is assigned to PlanDefinition, ActivityDefinition and Questionnaire resources in the eHealth Infrastructure created on the environment |
| [eHealthIdentifier](NamingSystem-ehealth-identifier.md) | The eHealth Identifier is assigned to certain domain resources in the eHealth Infrastructure and used when transforming to CDA document representation. |
| [eHealthQuestionIdentifier](NamingSystem-ehealth-question-identifier.md) | The eHealth Question Identifier is assigned to questions (not to be confused with question codes) in a questionnaire created in the eHealth Infrastructure. |

### Terminology: Concept Maps 

These define transformations to convert between codes by systems conforming with this implementation guide.

| | |
| :--- | :--- |
| [ActivityDefinition code to Observation code](ConceptMap-activitydefinition-code-to-observation-code.md) |  |
| [Activitydefinition-code to do missing measurement](ConceptMap-activitydefinition-code-to-do-missing-measurement.md) | The map controls whether an activity shall be subjected to missing measurements checks or not. |
| [Activitydefinition-code to do reminder](ConceptMap-activitydefinition-code-to-do-reminder.md) | The map controls whether an activity shall be subjected to producing reminders or not. |
| [Activitydefinition-code to measurement resource type](ConceptMap-activitydefinition-code-to-measurement-resource-type.md) | The map controls what type of measurement resource is expected for a given activity code. |
| [Activitydefinition-code-to-perform-sharing](ConceptMap-activitydefinition-code-to-perform-sharing.md) | The map controls whether an activity shall have sharingApprovalPolicy or not |
| [OIO BPP roles to eHealth CareTeam participant role mapping](ConceptMap-oio-bpp-roles-to-careteam-participant-roles.md) |  |
| [Observation code to UCUM mapping](ConceptMap-conceptmap-obs-code-to-ucum.md) |  |
| [UCUM code to PrintSymbol mapping](ConceptMap-conceptmap-ucum-to-printsymbol.md) |  |
| [conceptmap-obs-code-to-value-type](ConceptMap-conceptmap-obs-code-to-value-type.md) |  |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [291](Patient-291.md) |  |
| [CareTeam/108752](CareTeam-108752.md) |  |
| [CareTeam/42](CareTeam-42.md) |  |
| [Condition/42](Condition-42.md) |  |
| [EpisodeOfCare/42](EpisodeOfCare-42.md) |  |
| [Organization/108752](Organization-108752.md) |  |
| [Organization/8564](Organization-8564.md) |  |
| [Patient/102](Patient-102.md) |  |
| [Practitioner/107302](Practitioner-107302.md) |  |
| [Practitioner/123](Practitioner-123.md) |  |
| [Practitioner/42](Practitioner-42.md) |  |
| [appointment01](Appointment-appointment01.md) |  |
| [group-appointment01](Appointment-group-appointment01.md) | Forundersøgelse |
| [group-videoappointment01](Appointment-group-videoappointment01.md) | Forundersøgelse |
| [message01](Communication-message01.md) |  |
| [relatedperson01](RelatedPerson-relatedperson01.md) |  |
| [videoappointment01](Appointment-videoappointment01.md) | Forundersøgelse |

### Other 

These are resources that are used within this implementation guide that do not fit into one of the other categories.

| | |
| :--- | :--- |
| [expParam](Parameters-expParam.md) | Expansion parameter |

